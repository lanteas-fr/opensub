<?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


class OPS_guide_instruction extends Basic
{
    public $new_schema = true;
    public $module_dir = 'OPS_guide_instruction';
    public $object_name = 'OPS_guide_instruction';
    public $table_name = 'ops_guide_instruction';
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
    public $statut_initial;
	
    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }

    function liste_etapes( ) {

        global $app_list_strings, $beanFiles;
    
        require_once($beanFiles["OPS_etape"]);
        
        $etapes = $this->get_linked_beans('ops_guide_instruction_ops_etape' , 'OPS_etape');

         // Création du tableau de récupération des etapes 
        foreach ( $etapes as $etape ) { 

            // Récupération des étapes
            $obj_etape = new OPS_etape() ;
            $obj_etape->retrieve($etape->id);

            $liste_etapes[$obj_etape->ordre]['id'] =  $obj_etape->id  ; 
            $liste_etapes[$obj_etape->ordre]['name'] =  $obj_etape->name  ; 

        }

        ksort($liste_etapes);
        return $liste_etapes ; 

    }

	
}