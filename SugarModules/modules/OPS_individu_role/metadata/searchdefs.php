<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_individu_role';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'role' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ROLE',
        'width' => '10%',
        'default' => true,
        'name' => 'role',
      ),
      'ops_personne_morale_ops_individu_role_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_OPS_PERSONNE_MORALE_OPS_INDIVIDU_ROLE_FROM_OPS_PERSONNE_MORALE_TITLE',
        'id' => 'OPS_PERSONNE_MORALE_OPS_INDIVIDU_ROLEOPS_PERSONNE_MORALE_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'ops_personne_morale_ops_individu_role_name',
      ),
      'ops_individu_ops_individu_role_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_OPS_INDIVIDU_OPS_INDIVIDU_ROLE_FROM_OPS_INDIVIDU_TITLE',
        'id' => 'OPS_INDIVIDU_OPS_INDIVIDU_ROLEOPS_INDIVIDU_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'ops_individu_ops_individu_role_name',
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
      0 => 'name',
      1 => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
      ),
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
