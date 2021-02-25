<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$viewdefs ['Documents'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
          0 => '<input type="hidden" name="old_id" value="{$fields.document_revision_id.value}">',
          1 => '<input type="hidden" name="parent_id" value="{$smarty.request.parent_id}">',
          2 => '<input type="hidden" name="parent_type" value="{$smarty.request.parent_type}">',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'include/javascript/popup_parent_helper.js',
        ),
        1 => 
        array (
          'file' => 'cache/include/javascript/sugar_grp_jsolait.js',
        ),
        2 => 
        array (
          'file' => 'modules/Documents/documents.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'filename',
            'displayParams' => 
            array (
              'required' => true,
              'onchangeSetFileNameTo' => 'document_name',
            ),
          ),
          1 => 'document_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ops_type_document_documents_name',
            'label' => 'LBL_OPS_TYPE_DOCUMENT_DOCUMENTS_FROM_OPS_TYPE_DOCUMENT_TITLE',
          ),
          1 => 'status_id',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'active_date',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'exp_date',
            'label' => 'LBL_DOC_EXP_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'displayParams' => 
            array (
              'rows' => 10,
              'cols' => 120,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'importable',
            'label' => 'LBL_IMPORTABLE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
$viewdefs['Documents']['QuickCreate']['templateMeta'] = array (
  'form' => 
  array (
    'enctype' => 'multipart/form-data',
    'hidden' => 
    array (
      0 => '<input type="hidden" name="old_id" value="{$fields.document_revision_id.value}">',
      1 => '<input type="hidden" name="parent_id" value="{$smarty.request.parent_id}">',
      2 => '<input type="hidden" name="parent_type" value="{$smarty.request.parent_type}">',
    ),
  ),
  'maxColumns' => '2',
  'widths' => 
  array (
    0 => 
    array (
      'label' => '10',
      'field' => '30',
    ),
    1 => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
  'includes' => 
  array (
    0 => 
    array (
      'file' => 'include/javascript/popup_parent_helper.js',
    ),
    1 => 
    array (
      'file' => 'cache/include/javascript/sugar_grp_jsolait.js',
    ),
    2 => 
    array (
      'file' => 'modules/Documents/documents.js',
    ),
  ),
);
?>
