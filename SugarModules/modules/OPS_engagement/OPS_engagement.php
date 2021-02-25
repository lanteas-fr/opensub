<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


class OPS_engagement extends Basic
{
    public $new_schema = true;
    public $module_dir = 'OPS_engagement';
    public $object_name = 'OPS_engagement';
    public $table_name = 'ops_engagement';
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
    public $date_effet;
    public $montant_ttc;
    public $currency_id;
    public $montant_liquide;
    public $montant_mandate;
    public $montant_paye;
    public $mode_gestion;
    public $libelle;
    public $type_engagement;
	
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