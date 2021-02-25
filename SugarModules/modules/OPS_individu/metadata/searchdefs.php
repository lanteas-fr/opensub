<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$module_name = 'OPS_individu';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'date_naissance' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_NAISSANCE',
        'width' => '10%',
        'default' => true,
        'name' => 'date_naissance',
      ),
      'tiers_financier' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_TIERS_FINANCIER',
        'width' => '10%',
        'name' => 'tiers_financier',
      ),
      'financeur' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_FINANCEUR',
        'width' => '10%',
        'name' => 'financeur',
      ),
      'reference' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REFERENCE',
        'width' => '10%',
        'default' => true,
        'name' => 'reference',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'address_city',
      3 => 'created_by_name',
      4 => 'do_not_call',
      5 => 'email',
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
