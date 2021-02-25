<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$dictionary["OPS_integrites_req"]["fields"]["ops_integrites_req_ops_integrites"] = array (
  'name' => 'ops_integrites_req_ops_integrites',
  'type' => 'link',
  'relationship' => 'ops_integrites_req_ops_integrites',
  'source' => 'non-db',
  'module' => 'OPS_integrites',
  'bean_name' => false,
  'vname' => 'LBL_OPS_INTEGRITES_REQ_OPS_INTEGRITES_FROM_OPS_INTEGRITES_TITLE',
  'id_name' => 'ops_integrites_id',
);
$dictionary["OPS_integrites_req"]["fields"]["ops_integrites_req_ops_integrites_name"] = array (
  'name' => 'ops_integrites_req_ops_integrites_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_INTEGRITES_REQ_OPS_INTEGRITES_FROM_OPS_INTEGRITES_TITLE',
  'save' => true,
  'id_name' => 'ops_integrites_id',
  'link' => 'ops_integrites_req_ops_integrites',
  'table' => 'ops_integrites',
  'module' => 'OPS_integrites',
  'rname' => 'name',
);
$dictionary["OPS_integrites_req"]["fields"]["ops_integrites_id"] = array (
  'name' => 'ops_integrites_id',
  'type' => 'link',
  'relationship' => 'ops_integrites_req_ops_integrites',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_INTEGRITES_REQ_OPS_INTEGRITES_FROM_OPS_INTEGRITES_REQ_TITLE',
);