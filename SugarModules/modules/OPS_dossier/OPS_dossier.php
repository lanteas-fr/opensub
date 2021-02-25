<?php


/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


class OPS_dossier extends Basic
{
    public $new_schema = true;
    public $module_dir = 'OPS_dossier';
    public $object_name = 'OPS_dossier';
    public $table_name = 'ops_dossier';
    public $importable = true;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;

    public $num_dossier;
    public $canal;

    public function bean_implements($interface)
    {
        switch ($interface) {
            case 'ACL':
                return true;
        }

        return false;
    }


    /**
     * @access public
     * @name updateStatut()
     * Fonction qui met à jour le statut , crée une historisation
     * 
     *  
     *  @return boolean	   true / false
     */

    public function updateStatut($nouveau_statut = null, $type_modification = null)
    {

        global $current_user, $beanFiles;

        $module = $this->module_dir;
        $bean = $this;
        require_once($beanFiles["OPS_etape"]);
        require_once($beanFiles["OPS_statut"]);
        require_once($beanFiles["OPS_historisation"]);

        $statut_updated = false;

        if (!empty($nouveau_statut)) {

            $timedate = new TimeDate($current_user);
            $date = $timedate->getNow(true);
            $date = $date->format("Y-m-d");

            if ($nouveau_statut !== "precedent") {

                // Initialisation du nouveau statut
                $this->ops_statut_id  = $nouveau_statut;
                $statut_updated = true;
            } else {

                // Récupération des status passés 
                $tab_historiques = $this->get_linked_beans('ops_historisation_ops_dossier', 'OPS_historisation', '', '', '', '', "flag_retour = '1'");

                foreach ($tab_historiques as $key => $historisation) {

                    $obj_historisation = new OPS_historisation();
                    $obj_historisation->retrieve($historisation->id);


                    $uneEtape = new OPS_etape();
                    $uneEtape->retrieve($obj_historisation->ops_etape_id);

                    $etapeCourante = new OPS_etape();
                    $etapeCourante->retrieve($this->ops_etape_id);

                    // On exclu du tableau les statuts des étapes suivantes ainsi que le statut actuel  
                    if ($this->ops_statut_id != $obj_historisation->ops_statut_id && $uneEtape->ordre <= $etapeCourante->ordre) {

                        $date                      = $obj_historisation->date_entered;
                        $formDate                  = substr($date, 6, 4) . "-" . substr($date, 3, 2) . "-" . substr($date, 0, 2) . " " . substr($date, 11, 7);
                        $tab_statut_prec[$formDate]['id_statut'] = $obj_historisation->ops_statut_id;
                        $tab_statut_prec[$formDate]['id_histo']  = $obj_historisation->id;
                    }

                    if ($this->ops_statut_id == $obj_historisation->ops_statut_id) {

                        $obj_historisation->flag_retour = "0";
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
                $obj_historisation->flag_retour = "0";
                $obj_historisation->save();

                // Initialisation du nouveau statut
                $this->ops_statut_id  = $ancienHisto['id_statut'];
            }

            $statut = new OPS_statut();
            $unStatut = $statut->retrieve($this->ops_statut_id);

            $etapes = $unStatut->get_linked_beans('ops_etape_ops_statut', 'OPS_etape');
            foreach ($etapes as $etape) { // Actuellement 1 seule etape possible
            }

            // Déclenchement de l'action au changement de statut dans OPS_statut
            $obj_statut = new OPS_statut();
            $obj_statut->retrieve($this->ops_statut_id);

            $this->ops_etape_id = $etape->id;
            $this->date_avancement   =  $date;
            $testy = $this->save();

            // Historisation du nouveau statut 
            $uneHistorisation                 = new OPS_historisation();
            $uneHistorisation->canal           = ($type_modification === "mass") ? "action_masse" : "action_unitaire";
            $uneHistorisation->ops_etape_id  = $etape->id;
            $uneHistorisation->ops_statut_id = $this->ops_statut_id;
            $uneHistorisation->auteur         = $current_user->name;
            $uneHistorisation->flag_retour   = '1';

            // Création de la relation avec le module OPS_Subvention
            $uneHistorisation->ops_historisation_ops_dossier_name = $this->name;
            $uneHistorisation->ops_dossier_id = $this->id;

            // Flagé l'historisation si elle existe deja pour la meme etape et meme statut 
            $tabs_historiques = $this->get_linked_beans('ops_historisation_ops_dossier', 'OPS_historisation', '', '', '', '', "flag_retour = '1'");
            foreach ($tabs_historiques as $key => $value) {

                $ancienHisto = $value;
            }
            #	$ancienHisto = array_pop( $tabs_historiques ); // 

            $old_historisation = new OPS_historisation();
            $old_historisation->retrieve($ancienHisto->id);

            if ($uneHistorisation->ops_etape_id === $old_historisation->ops_etape_id && $uneHistorisation->ops_statut_id === $old_historisation->ops_statut_id) {
                $old_historisation->flag_retour = "0";
                $old_historisation->save();
            }

            // Sauvegarde de l'historisation
            $uneHistorisation->save();

            $statut_updated = true;
        }

        return $statut_updated;
    }
}
