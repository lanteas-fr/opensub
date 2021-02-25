<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$dictionary["ops_integrites_req_ops_integrites"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ops_integrites_req_ops_integrites' => 
    array (
      'lhs_module' => 'OPS_integrites',
      'lhs_table' => 'ops_integrites',
      'lhs_key' => 'id',
      'rhs_module' => 'OPS_integrites_req',
      'rhs_table' => 'ops_integrites_req',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ops_integrites_req_ops_integrites',
      'join_key_lhs' => 'ops_integrites_id',
      'join_key_rhs' => 'ops_integrites_req_id',
    ),
  ),
  'table' => 'ops_integrites_req_ops_integrites',
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
      'name' => 'ops_integrites_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ops_integrites_req_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ops_integrites_req_ops_integritesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ops_integrites_req_ops_integrites_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ops_integrites_id',
      ),
    ),
    2 => 
    array (
      'name' => 'ops_integrites_req_ops_integrites_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ops_integrites_req_id',
      ),
    ),
  ),
);