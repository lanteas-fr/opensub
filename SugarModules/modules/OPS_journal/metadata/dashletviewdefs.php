<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$dashletData['OPS_journalDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'type_parent' => 
  array (
    'default' => '',
  ),
  'id_parent' => 
  array (
    'default' => '',
  ),
  'statut' => 
  array (
    'default' => '',
  ),
  'erreur' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['OPS_journalDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'type_parent' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE_PARENT',
    'width' => '10%',
    'default' => true,
  ),
  'id_parent' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ID_PARENT',
    'width' => '10%',
    'default' => true,
  ),
  'statut' => 
  array (
    'type' => 'radioenum',
    'studio' => 'visible',
    'label' => 'LBL_STATUT',
    'width' => '10%',
    'default' => true,
  ),
  'erreur' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ERREUR',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
