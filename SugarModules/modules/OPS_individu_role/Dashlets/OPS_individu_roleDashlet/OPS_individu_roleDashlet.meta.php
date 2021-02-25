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

$dashletMeta['OPS_individu_roleDashlet'] = array(
    'module' => 'OPS_individu_role',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'OPS_individu_role'),
    'description' => 'A customizable view into OPS_individu_role',
    'category' => 'Module Views'
);