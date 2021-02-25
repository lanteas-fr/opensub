<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$dictionary["ops_historisation_ops_dossier"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ops_historisation_ops_dossier' => 
    array (
      'lhs_module' => 'OPS_dossier',
      'lhs_table' => 'ops_dossier',
      'lhs_key' => 'id',
      'rhs_module' => 'OPS_historisation',
      'rhs_table' => 'ops_historisation',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ops_historisation_ops_dossier',
      'join_key_lhs' => 'ops_dossier_id',
      'join_key_rhs' => 'ops_historisation_id',
    ),
  ),
  'table' => 'ops_historisation_ops_dossier',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'ops_dossier_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ops_historisation_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ops_historisation_ops_dossierspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ops_historisation_ops_dossier_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ops_dossier_id',
      ),
    ),
    2 => 
    array (
      'name' => 'ops_historisation_ops_dossier_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ops_historisation_id',
      ),
    ),
  ),
);