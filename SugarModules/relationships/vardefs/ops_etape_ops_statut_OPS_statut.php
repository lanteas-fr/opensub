<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$dictionary["OPS_statut"]["fields"]["ops_etape_ops_statut"] = array (
  'name' => 'ops_etape_ops_statut',
  'type' => 'link',
  'relationship' => 'ops_etape_ops_statut',
  'source' => 'non-db',
  'module' => 'OPS_etape',
  'bean_name' => 'OPS_etape',
  'vname' => 'LBL_OPS_ETAPE_OPS_STATUT_FROM_OPS_ETAPE_TITLE',
  'id_name' => 'ops_etape_id',
);
$dictionary["OPS_statut"]["fields"]["ops_etape_ops_statut_name"] = array (
  'name' => 'ops_etape_ops_statut_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_ETAPE_OPS_STATUT_FROM_OPS_ETAPE_TITLE',
  'save' => true,
  'id_name' => 'ops_etape_id',
  'link' => 'ops_etape_ops_statut',
  'table' => 'ops_etape',
  'module' => 'OPS_etape',
  'rname' => 'name',
);
$dictionary["OPS_statut"]["fields"]["ops_etape_id"] = array (
  'name' => 'ops_etape_id',
  'type' => 'link',
  'relationship' => 'ops_etape_ops_statut',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_ETAPE_OPS_STATUT_FROM_OPS_STATUT_TITLE',
);
