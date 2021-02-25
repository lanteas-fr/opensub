<?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'OPS_personne_morale';
$object_name = 'OPS_personne_morale';
$_module_name = 'ops_personne_morale';
$popupMeta = array(
    'moduleMain' => $module_name,
    'varName' => $object_name,
    'orderBy' => $_module_name . '.name',
    'whereClauses' => array(
        'name' => $_module_name . '.name',
        'billing_address_city' => $_module_name . '.billing_address_city',
        'phone_office' => $_module_name . '.phone_office'
    ),
    'searchInputs' => array(
        'name',
        'billing_address_city',
        'phone_office',
        'industry'

    ),
);
