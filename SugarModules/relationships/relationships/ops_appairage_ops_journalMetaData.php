<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$dictionary["ops_appairage_ops_journal"] = array (
  'relationships' => 
  array (
    'ops_appairage_ops_journal' => 
    array (
      'lhs_module' => 'OPS_appairage',
      'lhs_table' => 'ops_appairage',
      'lhs_key' => 'id',
      'rhs_module' => 'OPS_journal',
      'rhs_table' => 'ops_journal',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);