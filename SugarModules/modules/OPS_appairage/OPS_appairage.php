<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

class OPS_appairage extends Basic
{
    var $new_schema = true;
    var $module_dir = 'OPS_appairage';
    var $object_name = 'OPS_appairage';
    var $table_name = 'ops_appairage';
    var $importable = false;

    var $id;
    var $name;
    var $date_entered;
    var $date_modified;
    var $modified_user_id;
    var $modified_by_name;
    var $created_by;
    var $created_by_name;
    var $description;
    var $deleted;
    var $created_by_link;
    var $modified_user_link;
    var $assigned_user_id;
    var $assigned_user_name;
    var $assigned_user_link;
    var $SecurityGroups;
    var $logiciel;

       var $code_appli_ext;
    var $id_externe;
    var $jeton_appli;
    var $date_expiration;
    var $parent_name;
    var $parent_type;
    var $parent_id;
    var $statut;

    function OPS_appairage(){   
        parent::Basic();
    }
    
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