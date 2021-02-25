<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_statut';
$listViewDefs [$module_name] = 
array (
  'ORDRE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ORDRE',
    'width' => '5%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CODE_COULEUR' => 
  array (
    'type' => 'ColourPicker',
    'label' => 'LBL_CODE_COULEUR',
    'width' => '10%',
    'default' => true,
  ),
  'AVANCEMENT' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_AVANCEMENT',
    'width' => '10%',
  ),
  'NOM_STATUT_GRU' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NOM_STATUT_GRU',
    'width' => '10%',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
