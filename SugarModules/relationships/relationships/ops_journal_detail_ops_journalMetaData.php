<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$dictionary["ops_journal_detail_ops_journal"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ops_journal_detail_ops_journal' => 
    array (
      'lhs_module' => 'OPS_journal',
      'lhs_table' => 'ops_journal',
      'lhs_key' => 'id',
      'rhs_module' => 'OPS_journal_detail',
      'rhs_table' => 'ops_journal_detail',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ops_journal_detail_ops_journal',
      'join_key_lhs' => 'ops_journal_id',
      'join_key_rhs' => 'ops_journal_detail_id',
    ),
  ),
  'table' => 'ops_journal_detail_ops_journal',
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
      'name' => 'ops_journal_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ops_journal_detail_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ops_journal_detail_ops_journalspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ops_journal_detail_ops_journal_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ops_journal_id',
      ),
    ),
    2 => 
    array (
      'name' => 'ops_journal_detail_ops_journal_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ops_journal_detail_id',
      ),
    ),
  ),
);