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

$dashletMeta['OPS_type_personneDashlet'] = array(
    'module' => 'OPS_type_personne',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'OPS_type_personne'),
    'description' => 'A customizable view into OPS_type_personne',
    'category' => 'Module Views'
);