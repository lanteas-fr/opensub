<?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'OPS_individu';
$object_name = 'OPS_individu';
$_module_name = 'ops_individu';
$popupMeta = array(
    'moduleMain' => $module_name,
    'varName' => $object_name,
    'orderBy' => $_module_name . '.first_name, ' . $_module_name . '.last_name',
    'whereClauses' => array(
        'first_name' => $_module_name . '.first_name',
        'last_name' => $_module_name . '.last_name',
    ),
    'searchInputs' => array('first_name', 'last_name'),
);
