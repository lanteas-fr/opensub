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

$dashletMeta['OPS_personne_moraleDashlet'] = array(
    'module' => 'OPS_personne_morale',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'OPS_personne_morale'),
    'description' => 'A customizable view into OPS_personne_morale',
    'category' => 'Module Views'
);