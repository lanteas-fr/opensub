<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$layout_defs["OPS_tranche"]["subpanel_setup"]['ops_tranche_ops_dossier'] = array (
  'order' => 100,
  'module' => 'OPS_dossier',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPS_TRANCHE_OPS_DOSSIER_FROM_OPS_DOSSIER_TITLE',
  'get_subpanel_data' => 'ops_tranche_ops_dossier',
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
