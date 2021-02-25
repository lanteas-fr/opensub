<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$layout_defs["OPS_banque"]["subpanel_setup"]['ops_domiciliation_ops_banque'] = array (
  'order' => 100,
  'module' => 'OPS_domiciliation',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPS_DOMICILIATION_OPS_BANQUE_FROM_OPS_DOMICILIATION_TITLE',
  'get_subpanel_data' => 'ops_domiciliation_ops_banque',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
