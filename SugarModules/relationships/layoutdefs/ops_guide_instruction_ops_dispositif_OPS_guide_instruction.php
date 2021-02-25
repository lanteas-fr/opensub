<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$layout_defs["OPS_guide_instruction"]["subpanel_setup"]['ops_guide_instruction_ops_dispositif'] = array (
  'order' => 100,
  'module' => 'OPS_dispositif',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPS_GUIDE_INSTRUCTION_OPS_DISPOSITIF_FROM_OPS_DISPOSITIF_TITLE',
  'get_subpanel_data' => 'ops_guide_instruction_ops_dispositif',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
