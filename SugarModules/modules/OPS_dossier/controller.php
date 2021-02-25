<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class OPS_dossierController extends SugarController
{

    /**
     * Controller dossier 
     * @var SugarBean $currentBean
     */
    protected $currentBean = null;

    /**
     * Action du guide d'instruction
    */
    protected function action_workflow()
    {    
        global $current_user, $beanFiles;
        
        require_once($beanFiles["OPS_etape"]);
        require_once($beanFiles["OPS_statut"]);
        require_once($beanFiles["OPS_historisation"]);

        $bean = $this->currentBean;

        if (!empty($_REQUEST['action_id'])) {

            $timedate = new TimeDate($current_user);
            $date = $timedate->getNow(true);
            $date = $date->format("Y-m-d");           
 
            if( $_REQUEST['action_id'] != "precedent"){

                // Initialisation du nouveau statut
                $this->bean->ops_statut_id  = $_REQUEST['action_id'] ;  
      

            }else{

    
               // Récupération des status passés 
                $tab_historiques = $this->bean->get_linked_beans('ops_historisation_ops_dossier','OPS_historisation','','','','',"flag_retour = '1'");
                
                foreach ($tab_historiques as $key => $historisation) {
                    
                    $obj_historisation = new OPS_historisation();
                    $obj_historisation->retrieve($historisation->id);

                    
                    $uneEtape = new OPS_etape();
                    $uneEtape->retrieve($obj_historisation->ops_etape_id);

                    $etapeCourante = new OPS_etape();
                    $etapeCourante->retrieve($this->bean->ops_etape_id);
                    
                    // On exclu du tableau les statuts des étapes suivantes ainsi que le statut actuel  
                    if ($this->bean->ops_statut_id != $obj_historisation->ops_statut_id && $uneEtape->ordre <= $etapeCourante->ordre) {

                       
                        $date                       = $obj_historisation->date_entered;
                        $formDate                   = substr($date, 6, 4) . "-" . substr($date, 3, 2) . "-" . substr($date, 0, 2) . " " . substr($date, 11, 7);
                        $tab_statut_prec[$formDate]['id_statut'] = $obj_historisation->ops_statut_id;
                        $tab_statut_prec[$formDate]['id_histo'] = $obj_historisation->id;
                    }

                    if( $this->bean->ops_statut_id == $obj_historisation->ops_statut_id ){

                        $obj_historisation->flag_retour = "0" ;
                        $obj_historisation->save();

                    }
                    
                }
                
                ksort($tab_statut_prec);

            
                foreach ($tab_statut_prec as $key => $value) {
  
                    $ancienHisto = $value;

                }

                // Flag sur l'ancien histo du statut précédent 
                $obj_historisation = new OPS_historisation();
                $obj_historisation->retrieve($ancienHisto['id_histo']);
                $obj_historisation->flag_retour = "0" ;
                $obj_historisation->save();
                // Initialisation du nouveau statut
                $this->bean->ops_statut_id  = $ancienHisto['id_statut'] ;  
                
            }


            $statut = new OPS_statut();
            $unStatut = $statut->retrieve(  $this->bean->ops_statut_id  );

            $etapes = $unStatut->get_linked_beans('ops_etape_ops_statut' , 'OPS_etape');
            foreach ( $etapes as $etape ) { // Actuellement 1 seule etape possible
            }

            /* Déclenchement de l'action au changement de statut dans OPS_statut */
            $obj_statut = new OPS_statut() ;
            $obj_statut->retrieve($this->bean->ops_statut_id);

            $this->bean->ops_etape_id    = $etape->id ;  
            $this->bean->date_avancement   =  $date ;             
            $this->bean->save();

            // Historisation du nouveau statut 
            $uneHistorisation                  = new OPS_historisation() ;
            $uneHistorisation->canal           = "action_unitaire";
            $uneHistorisation->ops_etape_id  = $etape->id; 
            $uneHistorisation->ops_statut_id = $this->bean->ops_statut_id ;
            $uneHistorisation->auteur          = $current_user->name ;
            $uneHistorisation->flag_retour     = '1';

            // Création de la relation avec le module OPS_Dossier
            $uneHistorisation->ops_historisation_ops_dossier_name = $this->bean->name;
            $uneHistorisation->ops_dossier_id = $this->bean->id;


            // Flagé l'historisation si elle existe deja pour la meme etape et meme statut 
            $tabs_historiques = $this->bean->get_linked_beans('ops_historisation_ops_dossier','OPS_historisation','','','','',"flag_retour = '1'");
            foreach ($tabs_historiques as $key => $value) {
  
                $ancienHisto = $value;

            }
            $old_historisation = new OPS_historisation();
            $old_historisation->retrieve($ancienHisto->id);

 

            if($uneHistorisation->ops_etape_id === $old_historisation->ops_etape_id && $uneHistorisation->ops_statut_id === $old_historisation->ops_statut_id){
                $old_historisation->flag_retour = "0" ;
                $old_historisation->save(); 
            }


            // Sauvegarde de l'historisation
            $uneHistorisation->save() ;


            
              
        }


        SugarApplication::redirect('index.php?action=DetailView&module=OPS_dossier&record='.$this->bean->id);         

    }

}
