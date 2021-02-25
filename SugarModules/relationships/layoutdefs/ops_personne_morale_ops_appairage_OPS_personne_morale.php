<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$layout_defs["OPS_personne_morale"]["subpanel_setup"]['ops_personne_morale_ops_appairage'] = array (
  'order' => 100,
  'module' => 'OPS_appairage',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'name',
  'title_key' => 'LBL_OPS_PERSONNE_MORALE_OPS_APPAIRAGE_FROM_OPS_APPAIRAGE_TITLE',
  'get_subpanel_data' => 'ops_personne_morale_ops_appairage',
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
