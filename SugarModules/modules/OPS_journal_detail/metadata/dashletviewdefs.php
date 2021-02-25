<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$dashletData['OPS_journal_detailDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'ops_journal_detail_ops_journal_name' => 
  array (
    'default' => '',
  ),
  'tache' => 
  array (
    'default' => '',
  ),
  'reponse' => 
  array (
    'default' => '',
  ),
  'statut' => 
  array (
    'default' => '',
  ),
  'erreur' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['OPS_journal_detailDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ops_journal_detail_ops_journal_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPS_JOURNAL_DETAIL_OPS_JOURNAL_FROM_OPS_JOURNAL_TITLE',
    'id' => 'OPS_JOURNAL_DETAIL_OPS_JOURNALOPS_JOURNAL_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'tache' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TACHE',
    'width' => '10%',
    'default' => true,
  ),
  'reponse' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REPONSE',
    'width' => '10%',
    'default' => true,
  ),
  'statut' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUT',
    'width' => '10%',
    'default' => true,
  ),
  'erreur' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ERREUR',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'ordre' => 
  array (
    'width' => '15%',
    'label' => 'LBL_ORDRE',
    'name' => 'ordre',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
