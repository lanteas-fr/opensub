<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_journal_detail';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'ops_journal_detail_ops_journal_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_OPS_JOURNAL_DETAIL_OPS_JOURNAL_FROM_OPS_JOURNAL_TITLE',
        'id' => 'OPS_JOURNAL_DETAIL_OPS_JOURNALOPS_JOURNAL_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'ops_journal_detail_ops_journal_name',
      ),
      'tache' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TACHE',
        'width' => '10%',
        'default' => true,
        'name' => 'tache',
      ),
      'reponse' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REPONSE',
        'width' => '10%',
        'default' => true,
        'name' => 'reponse',
      ),
      'statut' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_STATUT',
        'width' => '10%',
        'default' => true,
        'name' => 'statut',
      ),
      'ordre' => 
      array (
        'type' => 'int',
        'studio' => 'visible',
        'label' => 'LBL_ORDRE',
        'width' => '10%',
        'default' => true,
        'name' => 'ordre',
      ),
      'erreur' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ERREUR',
        'width' => '10%',
        'default' => true,
        'name' => 'erreur',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
