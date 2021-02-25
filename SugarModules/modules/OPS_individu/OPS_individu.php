<?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

require_once('include/SugarObjects/templates/person/Person.php');

class OPS_individu extends Person
{
    public $new_schema = true;
    public $module_dir = 'OPS_individu';
    public $object_name = 'OPS_individu';
    public $table_name = 'ops_individu';
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
    public $salutation;
    public $first_name;
    public $last_name;
    public $full_name;
    public $title;
    public $photo;
    public $department;
    public $do_not_call;
    public $phone_home;
    public $email;
    public $phone_mobile;
    public $phone_work;
    public $phone_other;
    public $phone_fax;
    public $email1;
    public $email2;
    public $invalid_email;
    public $email_opt_out;
    public $primary_address_street;
    public $primary_address_street_2;
    public $primary_address_street_3;
    public $primary_address_city;
    public $primary_address_state;
    public $primary_address_postalcode;
    public $primary_address_country;
    public $alt_address_street;
    public $alt_address_street_2;
    public $alt_address_street_3;
    public $alt_address_city;
    public $alt_address_state;
    public $alt_address_postalcode;
    public $alt_address_country;
    public $assistant;
    public $assistant_phone;
    public $email_addresses_primary;
    public $email_addresses;
    public $email_addresses_non_primary;
    public $date_naissance;
    public $lieu_naissance;
    public $nationalite;
    public $situation_familiale;
    public $reference;
    public $tiers_financier;
    public $financeur;
	
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