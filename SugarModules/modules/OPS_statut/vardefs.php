<?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$dictionary['OPS_statut'] = array(
    'table' => 'ops_statut',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
        'ordre' => 
    array (
        'required' => false,
        'name' => 'ordre',
        'vname' => 'LBL_ORDRE',
        'type' => 'int',
        'massupdate' => 0,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => true,
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => '255',
        'size' => '20',
        'enable_range_search' => false,
        'disable_num_format' => '1',
        'min' => false,
        'max' => false,
    ),
  'code_couleur' => 
  array (
    'required' => false,
    'name' => 'code_couleur',
    'vname' => 'LBL_CODE_COULEUR',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'avancement' => 
  array (
    'required' => false,
    'name' => 'avancement',
    'vname' => 'LBL_AVANCEMENT',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'suivant',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'ops_statut_type_avance_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
    'nom_statut_gru' => 
  array (
    'required' => false,
    'name' => 'nom_statut_gru',
    'vname' => 'LBL_NOM_STATUT_GRU',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
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
VardefManager::createVardef('OPS_statut', 'OPS_statut', array('basic','assignable','security_groups'));