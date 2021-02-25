<?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_type_personne';
$viewdefs[$module_name]['QuickCreate'] = array(
    'templateMeta' => array(
        'maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
    ),

    'panels' => array(
        'default' => array(

            array(
                'name',
            ),
            array(
                array(
                    'name' => 'categorie_pes',
                    'label' => 'LBL_CATEGORIE_PES',
                ),
                array(
                    'name' => 'nature_juridique_pes',
                    'label' => 'LBL_NATURE_JURIDIQUE_PES',
                ),
            ),

            array(
                array(
                    'name' => 'type_tiers',
                    'label' => 'LBL_TYPE_TIERS',
                ),
                array(
                    'name' => 'imposable',
                    'label' => 'LBL_IMPOSABLE',
                ),
            ),

            array(
                array(
                    'name' => 'gestion_interets_moratoires',
                    'label' => 'LBL_GESTION_INTERETS_MORATOIRES',
                ),
                array(
                    'name' => 'gestion_multi_collectivite',
                    'label' => 'LBL_GESTION_MULTI_COLLECTIVITE',
                ),
            ),

            array(
                array(
                    'name' => 'classe_mouvement',
                    'label' => 'LBL_CLASSE_MOUVEMENT',
                ),
                array(
                    'name' => 'device',
                    'label' => 'LBL_DEVICE',
                ),
            ),

            array(
                array(
                    'name' => 'code_pays',
                    'label' => 'LBL_CODE_PAYS',
                ),
                array(
                    'name' => 'code_reglement',
                    'label' => 'LBL_CODE_REGLEMENT',
                ),
            ),
    
        ),

    ),

);
