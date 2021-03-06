<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$dictionary["ops_individu_activities_notes"] = array (
  'relationships' => 
  array (
    'ops_individu_activities_notes' => 
    array (
      'lhs_module' => 'OPS_individu',
      'lhs_table' => 'ops_individu',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'OPS_individu',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);