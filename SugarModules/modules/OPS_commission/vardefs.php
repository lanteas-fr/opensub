<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$dictionary['OPS_commission'] = array(
    'table' => 'ops_commission',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
      'assigned_user_id' => array(
        'name' => 'assigned_user_id',
        'rname' => 'user_name',
        'id_name' => 'assigned_user_id',
        'vname' => 'LBL_ASSIGNED_TO_ID',
        'group' => 'assigned_user_name',
        'massupdate' => 0,
        'type' => 'relate',
        'table' => 'users',
        'module' => 'Users',
        'reportable' => true,
        'isnull' => 'false',
        'dbType' => 'id',
        'audited' => true,
        'comment' => 'User ID assigned to record',
        'duplicate_merge' => 'disabled'
    ),
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_NAME',
    'type' => 'name',
    'link' => true,
    'dbType' => 'varchar',
    'len' => '255',
    'unified_search' => false,
    'full_text_search' => 
    array (
      'boost' => 3,
    ),
    'required' => true,
    'importable' => 'required',
    'duplicate_merge' => 'disabled',
    'merge_filter' => 'disabled',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => true,
    'reportable' => true,
    'size' => '20',
  ),

  'libelle_court' => array(
    'required' => false,
    'name' => 'libelle_court',
    'vname' => 'LBL_LIBELLE_COURT',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '128',
    'size' => '20'
),
'libelle_long' => array(
  'required' => false,
  'name' => 'libelle_long',
  'vname' => 'LBL_LIBELLE_LONG',
  'type' => 'varchar',
  'massupdate' => 0,
  'no_default' => false,
  'comments' => '',
  'help' => '',
  'importable' => 'true',
  'duplicate_merge' => 'disabled',
  'duplicate_merge_dom_value' => '0',
  'audited' => true,
  'inline_edit' => false,
  'reportable' => true,
  'unified_search' => false,
  'merge_filter' => 'disabled',
  'len' => '255',
  'size' => '20'
),
'statut_commission' => 
  array (
    'required' => true,
    'name' => 'statut_commission',
    'vname' => 'LBL_STATUT_COMMISSION',
    'type' => 'bool',
    'massupdate' => '1',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'studio' => 'visible',
    'dbType' => 'enum',
    'separator' => '<br>',
  ),

),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('OPS_commission', 'OPS_commission', array('basic','assignable','security_groups'));