<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$dashletData['OPS_individuDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'nationalite' => 
  array (
    'default' => '',
  ),
  'situation_familiale' => 
  array (
    'default' => '',
  ),
  'reference' => 
  array (
    'default' => '',
  ),
  'tiers_financier' => 
  array (
    'default' => '',
  ),
  'financeur' => 
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
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['OPS_individuDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'date_naissance' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_NAISSANCE',
    'width' => '10%',
    'default' => true,
  ),
  'tiers_financier' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_TIERS_FINANCIER',
    'width' => '10%',
  ),
  'financeur' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_FINANCEUR',
    'width' => '10%',
  ),
  'reference' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REFERENCE',
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
  'situation_familiale' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SITUATION_FAMILIALE',
    'width' => '10%',
    'default' => false,
  ),
  'lieu_naissance' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LIEU_NAISSANCE',
    'width' => '10%',
    'default' => false,
  ),
  'nationalite' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_NATIONALITE',
    'width' => '10%',
    'default' => false,
  ),
  'phone_mobile' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_MOBILE_PHONE',
    'width' => '10%',
    'default' => false,
  ),
  'email1' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'editview' => true,
      'editField' => true,
      'searchview' => false,
      'popupsearch' => false,
    ),
    'label' => 'LBL_EMAIL_ADDRESS',
    'width' => '10%',
    'default' => false,
  ),
  'salutation' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_SALUTATION',
    'width' => '10%',
    'default' => false,
  ),
  'first_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'last_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => false,
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
