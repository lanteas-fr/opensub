<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_journal_detail';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'OPS_JOURNAL_DETAIL_OPS_JOURNAL_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPS_JOURNAL_DETAIL_OPS_JOURNAL_FROM_OPS_JOURNAL_TITLE',
    'id' => 'OPS_JOURNAL_DETAIL_OPS_JOURNALOPS_JOURNAL_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'TACHE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TACHE',
    'width' => '10%',
    'default' => true,
  ),
  'REPONSE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REPONSE',
    'width' => '10%',
    'default' => true,
  ),
  'STATUT' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUT',
    'width' => '10%',
    'default' => true,
  ),
  'ERREUR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ERREUR',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'ORDRE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ORDRE',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
