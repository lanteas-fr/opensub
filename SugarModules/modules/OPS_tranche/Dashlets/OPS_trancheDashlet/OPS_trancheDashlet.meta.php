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

$dashletMeta['OPS_trancheDashlet'] = array(
    'module' => 'OPS_tranche',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'OPS_tranche'),
    'description' => 'A customizable view into OPS_tranche',
    'category' => 'Module Views'
);