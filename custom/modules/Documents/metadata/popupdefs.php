<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$popupMeta = array (
    'moduleMain' => 'Documents',
    'varName' => 'DOCUMENTS',
    'orderBy' => 'name',
    'whereClauses' => array (
  'importable' => 'documents.importable',
  'ops_type_document_documents_name' => 'documents.ops_type_document_documents_name',
),
    'searchInputs' => array (
  0 => 'importable',
  1 => 'ops_type_document_documents_name',
),
    'searchdefs' => array (
  'importable' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_IMPORTABLE',
    'width' => '10%',
    'name' => 'importable',
  ),
  'ops_type_document_documents_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPS_TYPE_DOCUMENT_DOCUMENTS_FROM_OPS_TYPE_DOCUMENT_TITLE',
    'id' => 'OPS_TYPE_DOCUMENT_DOCUMENTSOPS_TYPE_DOCUMENT_IDA',
    'width' => '10%',
    'name' => 'ops_type_document_documents_name',
  ),
),
    'listviewdefs' => array (
  'IMPORTABLE' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_IMPORTABLE',
    'width' => '10%',
    'name' => 'importable',
  ),
  'OPS_TYPE_DOCUMENT_DOCUMENTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPS_TYPE_DOCUMENT_DOCUMENTS_FROM_OPS_TYPE_DOCUMENT_TITLE',
    'id' => 'OPS_TYPE_DOCUMENT_DOCUMENTSOPS_TYPE_DOCUMENT_IDA',
    'width' => '10%',
    'default' => true,
  ),
),
);
