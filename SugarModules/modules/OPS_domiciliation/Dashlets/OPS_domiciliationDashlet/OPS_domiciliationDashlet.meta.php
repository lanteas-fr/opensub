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

$dashletMeta['OPS_domiciliationDashlet'] = array(
    'module' => 'OPS_domiciliation',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'OPS_domiciliation'),
    'description' => 'A customizable view into OPS_domiciliation',
    'category' => 'Module Views'
);