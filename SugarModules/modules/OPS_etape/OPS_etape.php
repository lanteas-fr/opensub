<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


class OPS_etape extends Basic
{
    public $new_schema = true;
    public $module_dir = 'OPS_etape';
    public $object_name = 'OPS_etape';
    public $table_name = 'ops_etape';
    public $importable = false;

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
    public $etape_precedente;
    public $retour_arriere;
    public $ops_etape_id;
    public $ordre;

    public function bean_implements($interface)
    {
        switch ($interface) {
            case 'ACL':
                return true;
        }

        return false;
    }

    public function getListeStatuts()
    {

        $statuts = array();
        $tab_statuts = array();

        if (!empty($this->id)) {

            $liste_statuts = $this->get_linked_beans('ops_etape_ops_statut', 'OPS_statut');
            foreach ($liste_statuts as $statut) {
                $tab_statuts[$statut->ordre] = array(
                    "id" => $statut->id,
                    "name" => $statut->name
                );
            }

            ksort($tab_statuts);

            //Formatage du tableau 
            foreach ($tab_statuts as $status) {
                $statuts[$status['id']] = $status['name'];
            }
        }

        return $statuts;
    }

    public function getEtapeSuivante()
    {

        $etape_suivante = false;

        if (!empty($this->id)) {

            //Récupération du guide d'instruction de l'étape courante
            $liste_guides = $this->get_linked_beans('ops_guide_instruction_ops_etape', 'OPS_guide_instruction');
            $guide = (is_array($liste_guides) && count($liste_guides) > 0) ? $liste_guides[0] : false;

            // Récupération de toutes les étapes du guide pour récupérer l'étape suivante
            $liste_etapes = ($guide !== false) ? $guide->get_linked_beans('ops_guide_instruction_ops_etape', 'OPS_etape') : array();
            foreach ($liste_etapes as $etape) {
                if ($etape->ops_etape_id === $this->id) {
                    $etape_suivante = $etape;
                }
            }
        }

        return $etape_suivante;
    }
}
