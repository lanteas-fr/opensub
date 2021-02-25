<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$dictionary['OPS_integrites'] = array(
    'table' => 'ops_integrites',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
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
    'duplicate_merge' => 'enabled',
    'merge_filter' => 'selected',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'duplicate_merge_dom_value' => '3',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'size' => '20',
  ),
  'ops_integrites_req_ops_integrites' =>
  array(
  'name' => 'ops_integrites_req_ops_integrites',
  'type' => 'link',
  'relationship' => 'ops_integrites_req_ops_integrites',
  'source' => 'non-db',
  'module' => 'OPS_integrites_req',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_INTEGRITES_REQ_OPS_INTEGRITES_FROM_OPS_INTEGRITES_REQ_TITLE',
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
VardefManager::createVardef('OPS_integrites', 'OPS_integrites', array('basic','assignable','security_groups'));