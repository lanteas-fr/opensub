<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$dictionary["OPS_journal_detail"]["fields"]["ops_journal_detail_ops_journal"] = array (
  'name' => 'ops_journal_detail_ops_journal',
  'type' => 'link',
  'relationship' => 'ops_journal_detail_ops_journal',
  'source' => 'non-db',
  'module' => 'OPS_journal',
  'bean_name' => false,
  'vname' => 'LBL_OPS_JOURNAL_DETAIL_OPS_JOURNAL_FROM_OPS_JOURNAL_TITLE',
  'id_name' => 'ops_journal_id',
);
$dictionary["OPS_journal_detail"]["fields"]["ops_journal_detail_ops_journal_name"] = array (
  'name' => 'ops_journal_detail_ops_journal_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_JOURNAL_DETAIL_OPS_JOURNAL_FROM_OPS_JOURNAL_TITLE',
  'save' => true,
  'id_name' => 'ops_journal_id',
  'link' => 'ops_journal_detail_ops_journal',
  'table' => 'ops_journal',
  'module' => 'OPS_journal',
  'rname' => 'name',
);
$dictionary["OPS_journal_detail"]["fields"]["ops_journal_id"] = array (
  'name' => 'ops_journal_id',
  'type' => 'link',
  'relationship' => 'ops_journal_detail_ops_journal',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_JOURNAL_DETAIL_OPS_JOURNAL_FROM_OPS_JOURNAL_DETAIL_TITLE',
);
