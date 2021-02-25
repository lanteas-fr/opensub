 <?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$dictionary['OPS_individu'] = array(
    'table' => 'ops_individu',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'date_naissance' => array(
            'required' => false,
            'name' => 'date_naissance',
            'vname' => 'LBL_DATE_NAISSANCE',
            'type' => 'date',
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
            'size' => '20',
            'enable_range_search' => false
        ),
        'lieu_naissance' => array(
            'required' => false,
            'name' => 'lieu_naissance',
            'vname' => 'LBL_LIEU_NAISSANCE',
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
            'size' => '20'
        ),
        'nationalite' => array(
            'required' => false,
            'name' => 'nationalite',
            'vname' => 'LBL_NATIONALITE',
            'type' => 'enum',
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
            'len' => 100,
            'size' => '20',
            'options' => 'ops_nationalite_list',
            'studio' => 'visible',
            'dependency' => false
        ),
        'situation_familiale' => array(
            'required' => false,
            'name' => 'situation_familiale',
            'vname' => 'LBL_SITUATION_FAMILIALE',
            'type' => 'enum',
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
            'len' => 100,
            'size' => '20',
            'options' => 'ops_situation_familiale_list',
            'studio' => 'visible',
            'dependency' => false
        ),
        'reference' => array(
            'required' => false,
            'name' => 'reference',
            'vname' => 'LBL_REFERENCE',
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
            'size' => '20'
        ),
        'tiers_financier' => array(
            'required' => false,
            'name' => 'tiers_financier',
            'vname' => 'LBL_TIERS_FINANCIER',
            'type' => 'bool',
            'massupdate' => 0,
            'default' => '0',
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
            'size' => '20'
        ),
        'financeur' => array(
            'required' => false,
            'name' => 'financeur',
            'vname' => 'LBL_FINANCEUR',
            'type' => 'bool',
            'massupdate' => 0,
            'default' => '0',
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
            'size' => '20'
        ),
        'num_individu' => array(
            'required' => false,
            'name' => 'num_individu',
            'vname' => 'LBL_NUM_INDIVIDU',
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
            'unified_search' => true,
            'merge_filter' => 'disabled',
            'len' => '255',
            'size' => '20',
            'enable_range_search' => false,
            'disable_num_format' => '1',
            'min' => 1,
            'max' => false,
            'validation' => array(
                'type' => 'range',
                'min' => 1,
                'max' => false
            )
        ),
        'primary_address_street' => array(
            'name' => 'primary_address_street',
            'vname' => 'LBL_PRIMARY_ADDRESS_STREET',
            'type' => 'varchar',
            'len' => '200',
            'group' => 'primary_address',
            'merge_filter' => 'enabled',
            'audited' => true
        ),
        'primary_address_street_1' => array(
            'name' => 'primary_address_street_1',
            'vname' => 'LBL_PRIMARY_ADDRESS_STREET_1',
            'type' => 'varchar',
            'len' => '38',
            'source' => 'non-db'
        ),
        'primary_address_street_2' => array(
            'name' => 'primary_address_street_2',
            'vname' => 'LBL_PRIMARY_ADDRESS_STREET_2',
            'type' => 'varchar',
            'len' => '38',
            'source' => 'non-db'
        ),
        'primary_address_street_3' => array(
            'name' => 'primary_address_street_3',
            'vname' => 'LBL_PRIMARY_ADDRESS_STREET_3',
            'type' => 'varchar',
            'len' => '38',
            'source' => 'non-db'
        ),
        'primary_address_city' => array(
            'name' => 'primary_address_city',
            'vname' => 'LBL_PRIMARY_ADDRESS_CITY',
            'type' => 'varchar',
            'len' => '30',
            'group' => 'primary_address',
            'merge_filter' => 'enabled',
            'audited' => true
        ),
        'primary_address_state' => array(
            'name' => 'primary_address_state',
            'vname' => 'LBL_PRIMARY_ADDRESS_STATE',
            'type' => 'varchar',
            'len' => '100',
            'group' => 'primary_address',
            'merge_filter' => 'enabled'
        ),
        'primary_address_postalcode' => array(
            'name' => 'primary_address_postalcode',
            'vname' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
            'type' => 'varchar',
            'len' => '10',
            'group' => 'primary_address',
            'merge_filter' => 'enabled',
            'audited' => true
        ),
        'primary_address_country' => array(
            'name' => 'primary_address_country',
            'vname' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
            'type' => 'varchar',
            'group' => 'primary_address',
            'merge_filter' => 'enabled',
            'audited' => true,
            'len' => '100'
        )
        
    ),
    'relationships' => array(),
    'optimistic_locking' => true,
    'unified_search' => true
);
if (!class_exists('VardefManager')) {
    require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('OPS_individu', 'OPS_individu', array(
    'basic',
    'assignable',
    'security_groups',
    'person'
)); 