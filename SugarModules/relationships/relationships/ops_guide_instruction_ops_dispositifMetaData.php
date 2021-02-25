<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$dictionary["ops_guide_instruction_ops_dispositif"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ops_guide_instruction_ops_dispositif' => 
    array (
      'lhs_module' => 'OPS_guide_instruction',
      'lhs_table' => 'ops_guide_instruction',
      'lhs_key' => 'id',
      'rhs_module' => 'OPS_dispositif',
      'rhs_table' => 'ops_dispositif',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ops_guide_instruction_ops_dispositif',
      'join_key_lhs' => 'ops_guide_instruction_id',
      'join_key_rhs' => 'ops_dispositif_id',
    ),
  ),
  'table' => 'ops_guide_instruction_ops_dispositif',
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
      'name' => 'ops_guide_instruction_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ops_dispositif_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ops_guide_instruction_ops_dispositifspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ops_guide_instruction_ops_dispositif_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ops_guide_instruction_id',
      ),
    ),
    2 => 
    array (
      'name' => 'ops_guide_instruction_ops_dispositif_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ops_dispositif_id',
      ),
    ),
  ),
);