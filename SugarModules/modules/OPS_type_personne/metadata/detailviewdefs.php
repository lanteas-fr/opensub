<?php
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$module_name = 'OPS_type_personne';
$viewdefs[$module_name]['DetailView'] = array(
    'templateMeta' => array(
        'form' => array(
            'buttons' => array(
                'EDIT',
                'DUPLICATE',
                'DELETE',
                'FIND_DUPLICATES',
            )
        ),
        'maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
    ),

    'panels' => array(

        array(
            'name',
        ),

        array(
            array(
                'name' => 'date_entered',
                'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
                'label' => 'LBL_DATE_ENTERED',
            ),
            array(
                'name' => 'date_modified',
                'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
                'label' => 'LBL_DATE_MODIFIED',
            ),
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

    )
);
