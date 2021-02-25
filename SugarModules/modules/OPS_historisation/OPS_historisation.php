<?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


class OPS_historisation extends Basic
{
    public $new_schema = true;
    public $module_dir = 'OPS_historisation';
    public $object_name = 'OPS_historisation';
    public $table_name = 'ops_historisation';
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
    public $canal;
    public $ops_statut_id;
    public $statut;
    public $ops_etape_id;
    public $etape;
    public $auteur;
	public $flag_retour;

    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }
	
}