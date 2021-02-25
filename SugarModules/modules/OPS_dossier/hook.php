<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/



class hook_dossier
{
    
    //
    // Fonction d'initialisation de l'étape et du statut 
    //
    function set_statut_initial_dossier(&$bean, $event, $arguments = null)
    {
        if ($event != 'before_save') {
            return;
        }

        global $current_user;
        
        if (empty($bean->ops_etape_id) && empty($bean->ops_statut_id)) { 
            // Récupération du dispositif lié au dossier pour récupérer le guide d'instruction
            $obj_dispositif = BeanFactory::getBean('OPS_dispositif',$bean->ops_dispositif_id); 
            if(!empty($obj_dispositif->id)){

                $guides = $obj_dispositif->get_linked_beans('ops_guide_instruction_ops_dispositif', 'OPS_guide_instruction');
                if(is_array($guides) && count($guides) > 0 ){

                    $guide = $guides[0];
                    if(!empty($guide->ops_statut_id)){

                        $statut_initial_id = $guide->ops_statut_id;
                        $statut_initial = BeanFactory::getBean('OPS_statut',$statut_initial_id );
                        if(!empty($statut_initial->id)){

                            $tab_etape_initiale = $statut_initial->get_linked_beans('ops_etape_ops_statut', 'OPS_etape');
                            if(is_array($tab_etape_initiale) && count($tab_etape_initiale) > 0){
                                
                                $etape_initiale_id = $tab_etape_initiale[0]->id;
                                if(!empty($etape_initiale_id)){

                                    $timedate = new TimeDate($current_user);
                                    $date = $timedate->getNow(true);
                                    $date = $date->format("Y-m-d");     

                                    $bean->ops_etape_id      = $etape_initiale_id;
                                    $bean->ops_statut_id     = $statut_initial_id;
                                    $bean->date_avancement     = $date;

                                    // Historisation du nouveau statut 
                                    $histo                  = new OPS_historisation() ;
                                    $histo->canal           = "action_unitaire";
                                    $histo->ops_etape_id    = $etape_initiale_id; 
                                    $histo->ops_statut_id   = $statut_initial_id ;
                                    $histo->auteur          = $current_user->name ;
                                    $histo->flag_retour     = '1';
                                    $id_histo = $histo->save(false); 
                                    $bean->load_relationship('ops_historisation_ops_dossier');
                                    $bean->ops_historisation_ops_dossier->add($id_histo);

                                }
                            }
                        }
                    }
                }
            }
        }
    }

    //
    // Fonction d'initialisation du numéro du dossier
    //
    function set_num_dossier(&$bean, $event, $arguments = null)
    {
        if ($event != 'before_save') {
            return;
        }
        global $app_list_strings, $beanFiles;
        
        require_once($beanFiles["OPS_elu"]);
        require_once($beanFiles["OPS_reunion"]);
        require_once($beanFiles["OPS_commission"]);

        // synchro soutiens_elus / elus 
        if (empty($_REQUEST['id_elus'])) {
            $bean->soutien_elus = 0;
        } else {
            $bean->soutien_elus = 1;
        }
        
        if (empty($bean->num_dossier)) { // Création du dossier
            global $db;
            
            // Récupération du type de tiers 
            $indi            = $bean->ops_individu_ops_dossier_name;
            $personne_morale = $bean->ops_personne_morale_ops_dossier_name;
            
            
            
            if (!empty($indi)) {
                
                $demandeur  = $bean->ops_personne_morale_ops_dossier_name;
                $type_tiers = "Individu";
                
            } elseif (!empty($personne_morale)) {
                
                $demandeur  = $bean->ops_personne_morale_ops_dossier_name;
                $type_tiers = "Personne Morale";
                
                
            } else {
                
                $demandeur = "";
                
            }
            
            $sql_num = 'SELECT num_dossier FROM ops_dossier WHERE deleted = 0 AND num_dossier != "" ORDER BY num_dossier DESC LIMIT 1';
            
            $result_num = $db->query($sql_num);
            
            if (!$result_num) {
                
                return $db->lastError();
                
            }
            
            if ($db->getRowCount($result_num) == 0) {
                
                // Premier dossier sur la plateforme
                if (!empty($bean->libelle_dossier)) {
                    $entete = "1 - " . $bean->libelle_dossier;
                } else {
                    
                    $entete = "1";
                    
                }
                
                $bean->demandeur      = $demandeur;
                $bean->type_tiers     = $type_tiers;
                $bean->name           = $entete;
                $bean->num_dossier = "1";
                
            } else {
                
                // Initialisation du numéro de demande + Name
                
                $row_num              = $db->fetchByAssoc($result_num);
                $num_sub              = $row_num['num_dossier'] + 1;
                $bean->demandeur      = $demandeur;
                $bean->type_tiers     = $type_tiers;
                $bean->num_dossier = $num_sub;
                
                if (!empty($bean->libelle_dossier)) {
                    $entete = $bean->num_dossier . " - " . $bean->libelle_dossier;
                } else {
                    
                    $entete = $bean->num_dossier;
                    
                }
                
                $bean->name = $entete;
                
            }
        } else { // Modification du dossier
            
            if (!empty($bean->libelle_dossier)) {
                $entete = $bean->num_dossier . " - " . $bean->libelle_dossier;
            } else {
                
                $entete = $bean->num_dossier;
                
            }
            $bean->name = $entete;
            
        }
    }

    function init_demandeur(&$bean, $event, $arguments = null)
    {
        if ($event != 'process_record') {
            return;
        }

        global $app_list_strings, $beanFiles;

        $erreur_demandeur = true;

        if(trim($bean->type_tiers) == "Individu"){
            $demandeurs = $bean->get_linked_beans("ops_individu_ops_dossier","OPS_individu");
            $name_personne = $demandeurs[0]->name;
            $id_personne = $demandeurs[0]->id;
            $name_module = 'OPS_individu';
            $name_relation = 'ops_individu_id';
        }elseif( trim($bean->type_tiers) =="Personne Morale"){

            $demandeurs = $bean->get_linked_beans("ops_personne_morale_ops_dossier","OPS_personne_morale");
            $name_personne = $demandeurs[0]->name;
            $id_personne = $demandeurs[0]->id;
            $name_module = 'OPS_personne_morale';
            $name_relation = 'ops_personne_morale_id';
        }else{
            $erreur_demandeur = false;
            $demandeur = "<div>Erreur</div>";
        }


        if($erreur_demandeur == true){
            $demandeur ='<a href="?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3D'.$name_module.'%26action%3DDetailView%26record%3D'.$id_personne.'">
                            <span id="'.$name_relation.'" class="sugar_field" data-id-value="'.$id_personne.'">
                            '.$name_personne.'
                            </span>
                        </a>';
        }

        $bean->demandeur = $demandeur;
    }
    
}

?>