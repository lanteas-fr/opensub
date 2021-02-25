<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$dictionary["OPS_campagne"]["fields"]["ops_campagne_documents"] = array (
  'name' => 'ops_campagne_documents',
  'type' => 'link',
  'relationship' => 'ops_campagne_documents',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_OPS_CAMPAGNE_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
