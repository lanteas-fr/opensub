<?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


class OPS_dispositif extends Basic
{
    public $new_schema = true;
    public $module_dir = 'OPS_dispositif';
    public $object_name = 'OPS_dispositif';
    public $table_name = 'ops_dispositif';
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
    public $attribution_auto;
    public $cle;
    
    public $type_depense;
    public $thematique;
    public $debut_realisation;
    public $fin_realisation;
    public $debut_caducite;
    public $fin_caducite;
	
    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }


    function recup_thematique( ) {

        if( !empty( $this->id ) ) // Vérification d'un objet passé en paramètre
        {

            return $this->thematique ; 

        }


	}
}