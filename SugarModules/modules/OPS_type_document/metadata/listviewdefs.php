<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_type_document';
$listViewDefs[$module_name] =
  array(
    'IDENTIFIANT' =>
    array(
      'type' => 'varchar',
      'label' => 'LBL_IDENTIFIANT',
      'width' => '10%',
      'default' => true,
    ),
    'NAME' =>
    array(
      'width' => '32%',
      'label' => 'LBL_NAME',
      'default' => true,
      'link' => true,
    ),
    'OBJET' =>
    array(
      'type' => 'radioenum',
      'studio' => 'visible',
      'label' => 'LBL_OBJET',
      'width' => '10%',
      'default' => true,
    ),
    'STATUT' =>
    array(
      'type' => 'bool',
      'studio' => 'visible',
      'label' => 'LBL_STATUT',
      'width' => '10%',
      'default' => true,
    ),
    'IMPORT' =>
    array(
      'type' => 'bool',
      'default' => true,
      'label' => 'LBL_IMPORT',
      'width' => '10%',
    ),
    'ASSIGNED_USER_NAME' =>
    array(
      'width' => '9%',
      'label' => 'LBL_ASSIGNED_TO_NAME',
      'module' => 'Employees',
      'id' => 'ASSIGNED_USER_ID',
      'default' => false,
    ),
    'TYPE_GRU' =>
    array(
      'type' => 'varchar',
      'label' => 'LBL_TYPE_GRU',
      'width' => '10%',
      'default' => false,
    ),
    'DOCUMENT_UNIQUE' =>
    array(
      'type' => 'bool',
      'default' => false,
      'label' => 'LBL_DOCUMENT_UNIQUE',
      'width' => '10%',
    ),
  );;
