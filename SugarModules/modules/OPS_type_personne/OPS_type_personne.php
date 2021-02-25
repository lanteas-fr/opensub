<?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


class OPS_type_personne extends Basic
{
    public $new_schema = true;
    public $module_dir = 'OPS_type_personne';
    public $object_name = 'OPS_type_personne';
    public $table_name = 'ops_type_personne';
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

    public $categorie_pes;
    public $nature_juridique_pes;
    public $type_tiers;
    public $imposable;
    public $gestion_interets_moratoires;
    public $gestion_multi_collectivite;
    public $classe_mouvement;
    public $device;
    public $code_pays;
    public $code_reglement;
         
        
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