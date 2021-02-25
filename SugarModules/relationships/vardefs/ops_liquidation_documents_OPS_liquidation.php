<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$dictionary["OPS_liquidation"]["fields"]["ops_liquidation_documents"] = array (
  'name' => 'ops_liquidation_documents',
  'type' => 'link',
  'relationship' => 'ops_liquidation_documents',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_OPS_LIQUIDATION_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
