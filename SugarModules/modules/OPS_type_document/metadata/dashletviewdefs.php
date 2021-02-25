<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$dashletData['OPS_type_documentDashlet']['searchFields'] = array(
  'name' =>
  array(
    'default' => '',
  ),
  'identifiant' =>
  array(
    'default' => '',
  ),
  'objet' =>
  array(
    'default' => '',
  ),
  'statut' =>
  array(
    'default' => '',
  ),
  'date_entered' =>
  array(
    'default' => '',
  ),
  'date_modified' =>
  array(
    'default' => '',
  ),
  'assigned_user_id' =>
  array(
    'default' => '',
  ),
);
$dashletData['OPS_type_documentDashlet']['columns'] = array(
  'identifiant' =>
  array(
    'type' => 'varchar',
    'label' => 'LBL_IDENTIFIANT',
    'width' => '10%',
    'default' => true,
  ),
  'name' =>
  array(
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'objet' =>
  array(
    'type' => 'radioenum',
    'studio' => 'visible',
    'label' => 'LBL_OBJET',
    'width' => '10%',
    'default' => true,
  ),
  'statut' =>
  array(
    'type' => 'bool',
    'studio' => 'visible',
    'label' => 'LBL_STATUT',
    'width' => '10%',
    'default' => true,
  ),
  'document_unique' =>
  array(
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_DOCUMENT_UNIQUE',
    'width' => '10%',
  ),
  'date_modified' =>
  array(
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' =>
  array(
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' =>
  array(
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'date_entered' =>
  array(
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'import' =>
  array(
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_IMPORT',
    'width' => '10%',
  ),
  'type_gru' =>
  array(
    'type' => 'varchar',
    'label' => 'LBL_TYPE_GRU',
    'width' => '10%',
    'default' => false,
  ),
);
