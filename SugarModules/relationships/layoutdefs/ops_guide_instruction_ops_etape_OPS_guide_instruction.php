<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$layout_defs["OPS_guide_instruction"]["subpanel_setup"]['ops_guide_instruction_ops_etape'] = array (
  'order' => 100,
  'module' => 'OPS_etape',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPS_GUIDE_INSTRUCTION_OPS_ETAPE_FROM_OPS_ETAPE_TITLE',
  'get_subpanel_data' => 'ops_guide_instruction_ops_etape',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
  ),
);
