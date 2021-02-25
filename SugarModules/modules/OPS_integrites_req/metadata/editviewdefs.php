<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_integrites_req';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => array(
            'footerTpl' => 'modules/SYNO_Pdf_templates/tpls/EditViewFooter.tpl'
        ),
      'includes' => array(
        0 => array(
            'file' => 'modules/OPS_integrites_req/js/editView.js'
        )
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
        array (
          0 => 'name',
          1 =>
          array(
            'name' => 'ops_integrites_req_ops_integrites_name',
            'label' => 'LBL_OPS_INTEGRITES_REQ_OPS_INTEGRITES_FROM_OPS_INTEGRITES_TITLE',
          ),
        ),
        array (
          0 => 'description',
        ),
        array(
          'name' => 'conseil',
          'label' => 'LBL_CONSEIL',
        ),
        array (
          0 => 
          array (
            'name' => 'nivlog',
            'studio' => 'visible',
            'label' => 'LBL_NIVLOG',
          ),
          1 => 
          array (
            'name' => 'choix_module',
            'studio' => 'visible',
            'label' => 'LBL_CHOIX_MODULE',
          ),
        ),
        array (
          0 => 
          array (
            'name' => 'actif',
            'label' => 'LBL_ACTIF',
          ),
        ),
      ),
    ),
  ),
);
;
?>
