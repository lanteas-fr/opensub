<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$dictionary["Note"]["fields"]["ops_dossier_notes"] = array (
  'name' => 'ops_dossier_notes',
  'type' => 'link',
  'relationship' => 'ops_dossier_notes',
  'source' => 'non-db',
  'module' => 'OPS_dossier',
  'bean_name' => 'OPS_dossier',
  'vname' => 'LBL_OPS_DOSSIER_NOTES_FROM_OPS_DOSSIER_TITLE',
  'id_name' => 'ops_dossier_id',
);
$dictionary["Note"]["fields"]["ops_dossier_notes_name"] = array (
  'name' => 'ops_dossier_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_DOSSIER_NOTES_FROM_OPS_DOSSIER_TITLE',
  'save' => true,
  'id_name' => 'ops_dossier_id',
  'link' => 'ops_dossier_notes',
  'table' => 'ops_dossier',
  'module' => 'OPS_dossier',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["ops_dossier_id"] = array (
  'name' => 'ops_dossier_id',
  'type' => 'link',
  'relationship' => 'ops_dossier_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_DOSSIER_NOTES_FROM_NOTES_TITLE',
);
