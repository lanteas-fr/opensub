<?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

//require_once('include/SugarObjects/templates/company/Company.php');

class OPS_personne_morale extends basic
{
    public $new_schema = true;
    public $module_dir = 'OPS_personne_morale';
    public $object_name = 'OPS_personne_morale';
    public $table_name = 'ops_personne_morale';
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
    public $ops_personne_morale_type;
    public $industry;
    public $annual_revenue;
    public $phone_fax;
    public $billing_address_street;
    public $billing_address_street_2;
    public $billing_address_street_3;
    public $billing_address_street_4;
    public $billing_address_city;
    public $billing_address_state;
    public $billing_address_postalcode;
    public $billing_address_country;
    public $rating;
    public $phone_office;
    public $phone_alternate;
    public $website;
    public $ownership;
    public $employees;
    public $ticker_symbol;
    public $shipping_address_street;
    public $shipping_address_street_2;
    public $shipping_address_street_3;
    public $shipping_address_street_4;
    public $shipping_address_city;
    public $shipping_address_state;
    public $shipping_address_postalcode;
    public $shipping_address_country;
    public $email1;
    public $email_addresses_primary;
    public $email_addresses;
    public $email_addresses_non_primary;
    public $sigle;
    public $logo;
    public $tiers_appaire;
    public $financeur;
    public $siret;
    public $reference;
    public $numero_rna;
    public $numero_rne;
    public $statut;
    public $date_declaration;
    public $type_virement;
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