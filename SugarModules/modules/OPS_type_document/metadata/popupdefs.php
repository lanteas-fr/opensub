<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$popupMeta = array (
    'moduleMain' => 'OPS_type_document',
    'varName' => 'OPS_type_document',
    'orderBy' => 'ops_type_document.name',
    'whereClauses' => array (
  'name' => 'ops_type_document.name',
  'identifiant' => 'ops_type_document.identifiant',
  'objet' => 'ops_type_document.objet',
  'statut' => 'ops_type_document.statut',
  'assigned_user_id' => 'ops_type_document.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'identifiant',
  5 => 'objet',
  6 => 'statut',
  7 => 'assigned_user_id',
),
    'searchdefs' => array (
  'identifiant' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_IDENTIFIANT',
    'width' => '10%',
    'name' => 'identifiant',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'objet' => 
  array (
    'type' => 'radioenum',
    'studio' => 'visible',
    'label' => 'LBL_OBJET',
    'width' => '10%',
    'name' => 'objet',
  ),
  'statut' => 
  array (
    'type' => 'bool',
    'studio' => 'visible',
    'label' => 'LBL_STATUT',
    'width' => '10%',
    'name' => 'statut',
  ),
  'assigned_user_id' => 
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
    'width' => '10%',
  ),
),
);
