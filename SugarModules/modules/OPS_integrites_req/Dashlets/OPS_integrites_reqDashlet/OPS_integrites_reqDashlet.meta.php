<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['OPS_integrites_reqDashlet'] = array(
    'module' => 'OPS_integrites_req',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'OPS_integrites_req'),
    'description' => 'A customizable view into OPS_integrites_req',
    'category' => 'Module Views'
);