<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_appairage';
$viewdefs[$module_name]['QuickCreate'] = array(
    'templateMeta' => array(
        'maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
    ),

    'panels' => array(
        'default' =>  array (
        array (
            0 => array (
                'name' => 'name',
                'label' => 'LBL_NAME',
            ), 
            1 => array (
                'name' => 'parent_name',
            ),
        ),
        array (
          0 => 'logiciel',
          1 => 'description',
        ),
        array (
            0 =>  array (
                'name' => 'statut',
                'label' => 'LBL_STATUT',
              ),
            1 => '',
        ),
      ),

    ),

);
