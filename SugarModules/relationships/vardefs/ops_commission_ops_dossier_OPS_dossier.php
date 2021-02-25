<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$dictionary["OPS_dossier"]["fields"]["ops_commission_ops_dossier"] = array(
  'name' => 'ops_commission_ops_dossier',
  'type' => 'link',
  'relationship' => 'ops_commission_ops_dossier',
  'source' => 'non-db',
  'module' => 'OPS_commission',
  'bean_name' => 'OPS_commission',
  'vname' => 'LBL_OPS_COMMISSION_OPS_DOSSIER_FROM_OPS_COMMISSION_TITLE',
);
$dictionary["OPS_dossier"]["fields"]["ops_commission_ops_dossier_name"] = array(
  'name' => 'ops_commission_ops_dossier_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_COMMISSION_OPS_DOSSIER_FROM_OPS_COMMISSION_TITLE',
  'save' => true,
  'id_name' => 'ops_commission_id',
  'link' => 'ops_commission_ops_dossier',
  'table' => 'ops_commission',
  'module' => 'OPS_commission',
  'rname' => 'name',
  'inline_edit' => false,
);
$dictionary["OPS_dossier"]["fields"]["ops_commission_id"] = array(
  'name' => 'ops_commission_id',
  'type' => 'link',
  'relationship' => 'ops_commission_ops_dossier',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_COMMISSION_OPS_DOSSIER_FROM_OPS_DOSSIER_TITLE',
);
