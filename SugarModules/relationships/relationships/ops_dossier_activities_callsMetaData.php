<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$dictionary["ops_dossier_activities_calls"] = array (
  'relationships' => 
  array (
    'ops_dossier_activities_calls' => 
    array (
      'lhs_module' => 'OPS_dossier',
      'lhs_table' => 'ops_dossier',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'OPS_dossier',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);