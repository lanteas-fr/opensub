<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$manifest = array(
    0 => array(
        'acceptable_sugar_versions' => array(
            0 => ''
        )
    ),
    1 => array(
        'acceptable_sugar_flavors' => array(
            0 => 'CE',
            1 => 'PRO',
            2 => 'ENT'
        )
    ),
    'readme' => '',
    'key' => 'OPS',
    'author' => 'Lanteas',
    'description' => 'Dématérialisation de la gestion des subventions',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Open Sub Community v1',
    'published_date' => '2020-02-05 16:00:00',
    'type' => 'module',
    'version' => '1.0',
    'remove_tables' => 'false'
);


$installdefs = array(

    'id' => 'opensub',

    'logic_hooks' => array(

        ///////////////// HOOKS BEFORE SAVE /////////////////      
        array(
            'module' => 'OPS_individu',
            'hook' => 'before_save',
            'order' => '',
            'description' => 'Initialisation du numéro de individu',
            'file' => 'modules/OPS_individu/hook.php',
            'class' => 'hook_individu',
            'function' => 'set_num_individu'
        ),

        array(
            'module' => 'OPS_statut',
            'hook' => 'process_record',
            'order' => '',
            'description' => 'Modification du sous pannel',
            'file' => 'modules/OPS_statut/hook.php',
            'class' => 'hook_statut',
            'function' => 'modif_subpannel'
        ),

        array(
            'module' => 'Employees',
            'hook' => 'before_save',
            'order' => '',
            'description' => 'test Employees',
            'file' => 'custom/Extension/modules/Employees/hook.php',
            'class' => 'hook_employees',
            'function' => 'add_employees'
        ),

        // Hooks dossier
        array(
            'module' => 'OPS_dossier',
            'hook' => 'before_save',
            'order' => '',
            'description' => 'Initialisation du numéro de dossier',
            'file' => 'modules/OPS_dossier/hook.php',
            'class' => 'hook_dossier',
            'function' => 'set_num_dossier'
        ),

        array(
            'module' => 'OPS_dossier',
            'hook' => 'before_save',
            'order' => '',
            'description' => 'Initialisation du statut et de l etape ',
            'file' => 'modules/OPS_dossier/hook.php',
            'class' => 'hook_dossier',
            'function' => 'set_statut_initial_dossier'
        ),

        array(
            'module' => 'OPS_dossier',
            'hook' => 'process_record',
            'order' => '',
            'description' => 'Initialisation du demandeur',
            'file' => 'modules/OPS_dossier/hook.php',
            'class' => 'hook_dossier',
            'function' => 'init_demandeur'
        ),

        // Hook suppression des détails journal before_delete journal
        array(
            'module' => 'OPS_journal',
            'hook' => 'before_delete',
            'order' => '',
            'description' => 'Suppression des détails journal',
            'file' => 'modules/OPS_journal/hook.php',
            'class' => 'hook_journal',
            'function' => 'delete_journal_details'
        ),

        // Hooks personnes morales 

        array(
            'module'         => 'OPS_personne_morale',
            'hook'           => 'before_save',
            'order'          => '',
            'description'    => 'Initialisation du numéro de tiers',
            'file'           => 'modules/OPS_personne_morale/hook.php',
            'class'          => 'hook_personne_morale',
            'function'       => 'set_num_tiers',
        ),

        array(
            'module'         => 'OPS_personne_morale',
            'hook'           => 'before_save',
            'order'          => '',
            'description'    => 'Initialisation de la categorie pse et la nature juridique pse',
            'file'           => 'modules/OPS_personne_morale/hook.php',
            'class'          => 'hook_personne_morale',
            'function'       => 'set_categorie_nature_juridique_pse',
        ),

        // Hooks réunion

        array(
            'module' => 'OPS_reunion',
            'hook' => 'before_save',
            'order' => '',
            'description' => 'Init name reunion',
            'file' => 'modules/OPS_reunion/hook.php',
            'class' => 'hook_reunion',
            'function' => 'set_name_reunion'
        ),
        array(
            'module' => 'OPS_reunion',
            'hook' => 'before_relationship_add',
            'order' => '',
            'description' => 'Liaison reunion dossier',
            'file' => 'modules/OPS_reunion/hook.php',
            'class' => 'hook_reunion',
            'function' => 'set_relation_reunion_dossier'
        ),

        // Hooks commissions

        array(
            'module' => 'OPS_commission',
            'hook' => 'before_relationship_add',
            'order' => '',
            'description' => 'Liaison commission dossier',
            'file' => 'modules/OPS_commission/hook.php',
            'class' => 'hook_commission',
            'function' => 'set_relation_commission_dossier'
        ),
        array(
            'module' => 'OPS_commission',
            'hook' => 'before_save',
            'order' => '',
            'description' => 'Init name commission',
            'file' => 'modules/OPS_commission/hook.php',
            'class' => 'hook_commission',
            'function' => 'set_name_commission'
        ),

        // Hooks elus 

        array(
            'module' => 'OPS_elu',
            'hook' => 'before_relationship_add',
            'order' => '',
            'description' => 'Liaison élu dossier',
            'file' => 'modules/OPS_elu/hook.php',
            'class' => 'hook_elu',
            'function' => 'set_relation_elu_dossier'
        ),

    ),

    'entrypoints' => array(
        array(
            'from' => '<basepath>/custom/application/Ext/EntryPoinyRegistry/entry_point_registry_core.php',
            'to_module' => 'application'
        )
    ),

    'beans' => array(

        array(
            'module' => 'OPS_dispositif',
            'class' => 'OPS_dispositif',
            'path' => 'modules/OPS_dispositif/OPS_dispositif.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_statut',
            'class' => 'OPS_statut',
            'path' => 'modules/OPS_statut/OPS_statut.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_etape',
            'class' => 'OPS_etape',
            'path' => 'modules/OPS_etape/OPS_etape.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_guide_instruction',
            'class' => 'OPS_guide_instruction',
            'path' => 'modules/OPS_guide_instruction/OPS_guide_instruction.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_localisation',
            'class' => 'OPS_localisation',
            'path' => 'modules/OPS_localisation/OPS_localisation.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_formule',
            'class' => 'OPS_formule',
            'path' => 'modules/OPS_formule/OPS_formule.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_appairage',
            'class' => 'OPS_appairage',
            'path' => 'modules/OPS_appairage/OPS_appairage.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_individu',
            'class' => 'OPS_individu',
            'path' => 'modules/OPS_individu/OPS_individu.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_historisation',
            'class' => 'OPS_historisation',
            'path' => 'modules/OPS_historisation/OPS_historisation.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_type_document',
            'class' => 'OPS_type_document',
            'path' => 'modules/OPS_type_document/OPS_type_document.php',
            'tab' => true
        ),
        array(
            'module' => 'OPS_journal',
            'class' => 'OPS_journal',
            'path' => 'modules/OPS_journal/OPS_journal.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_journal_detail',
            'class' => 'OPS_journal_detail',
            'path' => 'modules/OPS_journal_detail/OPS_journal_detail.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_dossier',
            'class' => 'OPS_dossier',
            'path' => 'modules/OPS_dossier/OPS_dossier.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_integrites',
            'class' => 'OPS_integrites',
            'path' => 'modules/OPS_integrites/OPS_integrites.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_integrites_req',
            'class' => 'OPS_integrites_req',
            'path' => 'modules/OPS_integrites_req/OPS_integrites_req.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_engagement',
            'class' => 'OPS_engagement',
            'path' => 'modules/OPS_engagement/OPS_engagement.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_exercice',
            'class' => 'OPS_exercice',
            'path' => 'modules/OPS_exercice/OPS_exercice.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_liquidation',
            'class' => 'OPS_liquidation',
            'path' => 'modules/OPS_liquidation/OPS_liquidation.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_piece',
            'class' => 'OPS_piece',
            'path' => 'modules/OPS_piece/OPS_piece.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_commission',
            'class' => 'OPS_commission',
            'path' => 'modules/OPS_commission/OPS_commission.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_tranche',
            'class' => 'OPS_tranche',
            'path' => 'modules/OPS_tranche/OPS_tranche.php',
            'tab' => true
        ),

        array(
            'module' => 'OPS_personne_morale',
            'class' => 'OPS_personne_morale',
            'path' => 'modules/OPS_personne_morale/OPS_personne_morale.php',
            'tab' => true,
        ),

        array(
            'module' => 'OPS_domiciliation',
            'class' => 'OPS_domiciliation',
            'path' => 'modules/OPS_domiciliation/OPS_domiciliation.php',
            'tab' => true,
        ),

        array(
            'module' => 'OPS_banque',
            'class' => 'OPS_banque',
            'path' => 'modules/OPS_banque/OPS_banque.php',
            'tab' => true,
        ),

        array(
            'module' => 'OPS_elu',
            'class' => 'OPS_elu',
            'path' => 'modules/OPS_elu/OPS_elu.php',
            'tab' => true,
        ),


        array(
            'module' => 'OPS_reunion',
            'class' => 'OPS_reunion',
            'path' => 'modules/OPS_reunion/OPS_reunion.php',
            'tab' => true,
        ),

        array(
            'module' => 'OPS_type_personne',
            'class' => 'OPS_type_personne',
            'path' => 'modules/OPS_type_personne/OPS_type_personne.php',
            'tab' => true,
        ),

        array(
            'module' => 'OPS_campagne',
            'class' => 'OPS_campagne',
            'path' => 'modules/OPS_campagne/OPS_campagne.php',
            'tab' => true
        ),

    ),

    'copy' => array(

        array(
            'from' => '<basepath>/services',
            'to' => 'custom/service'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_dispositif',
            'to' => 'modules/OPS_dispositif'
        ),

        array(
            'from' => '<basepath>/Theme/_headerModuleList.tpl',
            'to' => 'themes/SuiteP/tpls/_headerModuleList.tpl'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_statut',
            'to' => 'modules/OPS_statut'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_etape',
            'to' => 'modules/OPS_etape'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_guide_instruction',
            'to' => 'modules/OPS_guide_instruction'
        ),

        array(
            'from' => '<basepath>/ColourPicker/TemplateColourPicker.php',
            'to' => 'custom/modules/DynamicFields/templates/Fields/ColourPicker/TemplateColourPicker.php'
        ),

        array(
            'from' => '<basepath>/ColourPicker',
            'to' => 'custom/include/SugarFields/Fields/ColourPicker/'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_localisation',
            'to' => 'modules/OPS_localisation'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_formule',
            'to' => 'modules/OPS_formule'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_appairage',
            'to' => 'modules/OPS_appairage'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_individu',
            'to' => 'modules/OPS_individu'
        ),

        array(
            'from' => '<basepath>/Theme/style.css',
            'to' => 'themes/SuiteP/css/style.css'
        ),

        array(
            'from' => '<basepath>/Theme/img/',
            'to' => 'themes/SuiteP/images/'
        ),

        array(
            'from' => '<basepath>/Theme/SugarVCR.tpl',
            'to' => 'themes/SuiteP/include/EditView/SugarVCR.tpl'
        ),

        array(
            'from' => '<basepath>/Address',
            'to' => 'custom/include/SugarFields/Fields/Address/'
        ),

        array(
            'from' => '<basepath>/custom/include/javascript/bootstrap-inputmask.js',
            'to' => 'custom/include/javascript/bootstrap-inputmask.js'
        ),

        array(
            'from' => '<basepath>/custom/entrypoints/recuperationDispositif.php',
            'to' => 'custom/entrypoints/recuperationDispositif.php'
        ),


        array(
            'from' => '<basepath>/SugarModules/modules/OPS_historisation',
            'to' => 'modules/OPS_historisation'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_type_document',
            'to' => 'modules/OPS_type_document'
        ),
        // A revoir
        array(
            'from' => '<basepath>/custom/modules/Documents',
            'to' => 'custom/Extension/modules/Documents'
        ),

        array(
            'from' => '<basepath>/custom/modules/Users',
            'to' => 'custom/Extension/modules/Users'
        ),

        array(
            'from' => '<basepath>/custom/modules/Employees',
            'to' => 'custom/Extension/modules/Employees'
        ),

        array(
            'from' => '<basepath>/custom/modules/Documents',
            'to' => 'custom/modules/Documents'
        ),

        array(
            'from' => '<basepath>/custom/modules/Employees',
            'to' => 'custom/modules/Employees'
        ),
        // A corriger 2 fois
        array(
            'from' => '<basepath>/custom/modules/Users/',
            'to' => 'custom/modules/Users/'
        ),


        array(
            'from' => '<basepath>/SugarModules/modules/OPS_journal',
            'to' => 'modules/OPS_journal'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_journal_detail',
            'to' => 'modules/OPS_journal_detail'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_dossier',
            'to' => 'modules/OPS_dossier'
        ),
        /* Rajout type URL */
        array(
            'from' => '<basepath>/custom/include/modifications_core/MassUpdate.php',
            'to' => 'include/MassUpdate.php'
        ),
        /* Modification de la place du symbole - CHAMP CURRENCY => fonction format_place_symbol */
        array(
            'from' => '<basepath>/custom/include/modifications_core/Currency.php',
            'to' => 'modules/Currencies/Currency.php'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_integrites',
            'to' => 'modules/OPS_integrites'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_integrites_req',
            'to' => 'modules/OPS_integrites_req'
        ),

        // Images
        array(
            'from' => '<basepath>/custom/include/images',
            'to' => 'custom/include/images'
        ),

        // SUBVENTION 

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_engagement',
            'to' => 'modules/OPS_engagement'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_exercice',
            'to' => 'modules/OPS_exercice'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_liquidation',
            'to' => 'modules/OPS_liquidation'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_piece',
            'to' => 'modules/OPS_piece'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_commission',
            'to' => 'modules/OPS_commission'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_tranche',
            'to' => 'modules/OPS_tranche'
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_personne_morale',
            'to' => 'modules/OPS_personne_morale',
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_domiciliation',
            'to' => 'modules/OPS_domiciliation',
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_banque',
            'to' => 'modules/OPS_banque',
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_elu',
            'to' => 'modules/OPS_elu',
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_reunion',
            'to' => 'modules/OPS_reunion',
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_type_personne',
            'to' => 'modules/OPS_type_personne',
        ),

        array(
            'from' => '<basepath>/SugarModules/modules/OPS_campagne',
            'to' => 'modules/OPS_campagne'
        ),

    ),

    'layoutdefs' => array(

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_etape_ops_statut_OPS_etape.php',
            'to_module' => 'OPS_etape'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_guide_instruction_ops_etape_OPS_guide_instruction.php',
            'to_module' => 'OPS_guide_instruction'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_guide_instruction_ops_dispositif_OPS_guide_instruction.php',
            'to_module' => 'OPS_guide_instruction'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_individu_ops_appairage_OPS_individu.php',
            'to_module' => 'OPS_individu'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_individu_activities_calls_OPS_individu.php',
            'to_module' => 'OPS_individu'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_type_document_documents_OPS_type_document.php',
            'to_module' => 'OPS_type_document'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_journal_detail_ops_journal_OPS_journal.php',
            'to_module' => 'OPS_journal'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_appairage_ops_journal_OPS_appairage.php',
            'to_module' => 'OPS_appairage'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_dossier_ops_localisation_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_dossier_documents_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),
        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_individu_documents_OPS_individu.php',
            'to_module' => 'OPS_individu'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_dossier_activities_calls_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_dossier_notes_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_dispositif_ops_dossier_OPS_dispositif.php',
            'to_module' => 'OPS_dispositif'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_individu_ops_dossier_OPS_individu.php',
            'to_module' => 'OPS_individu'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_dossier_ops_appairage_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_dossier_ops_localisation_OPS_localisation.php',
            'to_module' => 'OPS_localisation'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_historisation_ops_dossier_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_integrites_req_ops_integrites_OPS_integrites.php',
            'to_module' => 'OPS_integrites'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_dossier_ops_journal_OPS_dossier.php',
            'to_module' => 'OPS_dossier',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_personne_morale_documents_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale'
        ),
        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_liquidation_documents_OPS_liquidation.php',
            'to_module' => 'OPS_liquidation'
        ),
        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_campagne_documents_OPS_campagne.php',
            'to_module' => 'OPS_campagne'
        ),
        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_engagement_documents_OPS_engagement.php',
            'to_module' => 'OPS_engagement'
        ),
        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_engagement_ops_liquidation_OPS_engagement.php',
            'to_module' => 'OPS_engagement'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_engagement_ops_dossier_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_dispositif_ops_piece_OPS_dispositif.php',
            'to_module' => 'OPS_dispositif'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_commission_ops_dossier_OPS_commission.php',
            'to_module' => 'OPS_commission'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_tranche_ops_dossier_OPS_tranche.php',
            'to_module' => 'OPS_tranche'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_tranche_ops_exercice_OPS_exercice.php',
            'to_module' => 'OPS_exercice'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_personne_morale_ops_dossier_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_personne_morale_ops_domiciliation_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_personne_morale_ops_appairage_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_personne_morale_ops_individu_OPS_individu.php',
            'to_module' => 'OPS_individu',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_personne_morale_ops_individu_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_personne_morale_activities_calls_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_individu_ops_domiciliation_OPS_individu.php',
            'to_module' => 'OPS_individu',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_domiciliation_ops_banque_OPS_banque.php',
            'to_module' => 'OPS_banque',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_campagne_ops_dossier_OPS_dossier.php',
            'to_module' => 'OPS_dossier',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_campagne_ops_dossier_OPS_campagne.php',
            'to_module' => 'OPS_campagne',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_elu_ops_dossier_OPS_elu.php',
            'to_module' => 'OPS_elu',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_reunion_ops_dossier_OPS_reunion.php',
            'to_module' => 'OPS_reunion',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_domiciliation_ops_appairage_OPS_domiciliation.php',
            'to_module' => 'OPS_domiciliation',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_domiciliation_ops_journal_OPS_domiciliation.php',
            'to_module' => 'OPS_domiciliation'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_personne_morale_ops_journal_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_type_personne_ops_personne_morale_OPS_type_personne.php',
            'to_module' => 'OPS_type_personne',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_type_personne_ops_individu_OPS_type_personne.php',
            'to_module' => 'OPS_type_personne',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_campagne_ops_dispositif_OPS_dispositif.php',
            'to_module' => 'OPS_dispositif'
        ),
    ),

    'relationships' => array(

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_etape_ops_statutMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_guide_instruction_ops_etapeMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_guide_instruction_ops_dispositifMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_individu_ops_appairageMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_individu_activities_emailsMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_individu_activities_callsMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_individu_activities_meetingsMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_individu_activities_notesMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_individu_activities_tasksMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_type_document_documentsMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_journal_detail_ops_journalMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_appairage_ops_journalMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_dossier_ops_localisationMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_dossier_documentsMetaData.php'
        ),
        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_individu_documentsMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_dossier_activities_callsMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_dossier_activities_meetingsMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_dossier_activities_notesMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_dossier_activities_tasksMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_dossier_activities_emailsMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_dossier_notesMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_dispositif_ops_dossierMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_individu_ops_dossierMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_dossier_ops_appairageMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_historisation_ops_dossierMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_integrites_req_ops_integritesMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_dossier_ops_journalMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_documentsMetaData.php'
        ),
        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_campagne_documentsMetaData.php'
        ),
        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_engagement_documentsMetaData.php'
        ),
        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_liquidation_documentsMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_engagement_ops_liquidationMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_engagement_ops_dossierMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_dispositif_ops_pieceMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_commission_ops_dossierMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_tranche_ops_dossierMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_tranche_ops_exerciceMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_ops_dossierMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_ops_domiciliationMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_ops_appairageMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_ops_individuMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_domiciliation_ops_banqueMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_activities_callsMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_activities_meetingsMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_activities_notesMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_activities_tasksMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_activities_emailsMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_individu_ops_domiciliationMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_campagne_ops_dossierMetaData.php'
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_elu_ops_dossierMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_reunion_ops_dossierMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_domiciliation_ops_appairageMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_ops_journalMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_domiciliation_ops_journalMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_type_personne_ops_personne_moraleMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_type_personne_ops_individuMetaData.php',
        ),

        array(
            'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_campagne_ops_dispositifMetaData.php'
        ),

    ),

    'image_dir' => '<basepath>/icons',

    'language' => array(

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_localisation.php',
            'to_module' => 'OPS_localisation',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_localisation.php',
            'to_module' => 'OPS_localisation',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_individu.php',
            'to_module' => 'OPS_individu',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_individu.php',
            'to_module' => 'OPS_individu',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
            'to_module' => 'Documents',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
            'to_module' => 'Documents',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
            'to_module' => 'application',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/language/application/fr_FR.lang.php',
            'to_module' => 'application',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/Calls.php',
            'to_module' => 'Calls',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/Calls.php',
            'to_module' => 'Calls',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/Meetings.php',
            'to_module' => 'Meetings',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/Meetings.php',
            'to_module' => 'Meetings',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/Notes.php',
            'to_module' => 'Notes',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/Notes.php',
            'to_module' => 'Notes',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_dispositif.php',
            'to_module' => 'OPS_dispositif',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_dispositif.php',
            'to_module' => 'OPS_dispositif',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
            'to_module' => 'Tasks',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
            'to_module' => 'Tasks',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/Emails.php',
            'to_module' => 'Emails',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/Emails.php',
            'to_module' => 'Emails',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_statut.php',
            'to_module' => 'OPS_statut',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_statut.php',
            'to_module' => 'OPS_statut',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_etape.php',
            'to_module' => 'OPS_etape',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_etape.php',
            'to_module' => 'OPS_etape',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_guide_instruction.php',
            'to_module' => 'OPS_guide_instruction',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_guide_instruction.php',
            'to_module' => 'OPS_guide_instruction',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/ColourPicker/fr_FR.ColourPicker.php',
            'to_module' => 'ModuleBuilder',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_dispositif.php',
            'to_module' => 'OPS_dispositif',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_dispositif.php',
            'to_module' => 'OPS_dispositif',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_appairage.php',
            'to_module' => 'OPS_appairage',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_appairage.php',
            'to_module' => 'OPS_appairage',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_historisation.php',
            'to_module' => 'OPS_historisation',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_historisation.php',
            'to_module' => 'OPS_historisation',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_type_document.php',
            'to_module' => 'OPS_type_document',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_type_document.php',
            'to_module' => 'OPS_type_document',
            'language' => 'fr_FR'
        ),


        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_journal_detail.php',
            'to_module' => 'OPS_journal_detail',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_journal_detail.php',
            'to_module' => 'OPS_journal_detail',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_journal.php',
            'to_module' => 'OPS_journal',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_journal.php',
            'to_module' => 'OPS_journal',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_dossier.php',
            'to_module' => 'OPS_dossier',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_dossier.php',
            'to_module' => 'OPS_dossier',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_integrites_req.php',
            'to_module' => 'OPS_integrites_req',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_integrites_req.php',
            'to_module' => 'OPS_integrites_req',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_integrites.php',
            'to_module' => 'OPS_integrites',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_integrites.php',
            'to_module' => 'OPS_integrites',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/language/application/fr_FR.lang.php',
            'to_module' => 'application',
            'language' => 'fr_FR',
        ),

        array(
            'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
            'to_module' => 'application',
            'language' => 'en_us',
        ),
        array(
            'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
            'to_module' => 'Documents',
            'language' => 'fr_FR'
        ),
        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_liquidation.php',
            'to_module' => 'OPS_liquidation',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_liquidation.php',
            'to_module' => 'OPS_liquidation',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_engagement.php',
            'to_module' => 'OPS_engagement',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_engagement.php',
            'to_module' => 'OPS_engagement',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_exercice.php',
            'to_module' => 'OPS_exercice',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_exercice.php',
            'to_module' => 'OPS_exercice',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
            'to_module' => 'application',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/language/application/fr_FR.lang.php',
            'to_module' => 'application',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_tranche.php',
            'to_module' => 'OPS_tranche',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_tranche.php',
            'to_module' => 'OPS_tranche',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_commission.php',
            'to_module' => 'OPS_commission',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_commission.php',
            'to_module' => 'OPS_commission',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_piece.php',
            'to_module' => 'OPS_piece',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_piece.php',
            'to_module' => 'OPS_piece',
            'language' => 'fr_FR'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_domiciliation.php',
            'to_module' => 'OPS_domiciliation',
            'language' => 'en_us',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_domiciliation.php',
            'to_module' => 'OPS_domiciliation',
            'language' => 'fr_FR',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_banque.php',
            'to_module' => 'OPS_banque',
            'language' => 'en_us',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_banque.php',
            'to_module' => 'OPS_banque',
            'language' => 'fr_FR',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_elu.php',
            'to_module' => 'OPS_elu',
            'language' => 'en_us',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_elu.php',
            'to_module' => 'OPS_elu',
            'language' => 'fr_FR',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_reunion.php',
            'to_module' => 'OPS_reunion',
            'language' => 'en_us',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_reunion.php',
            'to_module' => 'OPS_reunion',
            'language' => 'fr_FR',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_type_personne.php',
            'to_module' => 'OPS_type_personne',
            'language' => 'en_us',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_type_personne.php',
            'to_module' => 'OPS_type_personne',
            'language' => 'fr_FR',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_campagne.php',
            'to_module' => 'OPS_campagne',
            'language' => 'en_us'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/language/OPS_campagne.php',
            'to_module' => 'OPS_campagne',
            'language' => 'fr_FR'
        ),

    ),

    'vardefs' => array(

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_etape_ops_statut_OPS_statut.php',
            'to_module' => 'OPS_statut'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_etape_ops_statut_OPS_etape.php',
            'to_module' => 'OPS_etape'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_guide_instruction_ops_etape_OPS_etape.php',
            'to_module' => 'OPS_etape'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_guide_instruction_ops_etape_OPS_guide_instruction.php',
            'to_module' => 'OPS_guide_instruction'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_guide_instruction_ops_dispositif_OPS_guide_instruction.php',
            'to_module' => 'OPS_guide_instruction'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_guide_instruction_ops_dispositif_OPS_dispositif.php',
            'to_module' => 'OPS_dispositif'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_ops_appairage_OPS_individu.php',
            'to_module' => 'OPS_individu'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_activities_calls_Calls.php',
            'to_module' => 'Calls'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_activities_calls_OPS_individu.php',
            'to_module' => 'OPS_individu'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_activities_meetings_Meetings.php',
            'to_module' => 'Meetings'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_activities_meetings_OPS_individu.php',
            'to_module' => 'OPS_individu'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_activities_notes_Notes.php',
            'to_module' => 'Notes'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_activities_notes_OPS_individu.php',
            'to_module' => 'OPS_individu'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_activities_tasks_Tasks.php',
            'to_module' => 'Tasks'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_activities_tasks_OPS_individu.php',
            'to_module' => 'OPS_individu'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_activities_emails_Emails.php',
            'to_module' => 'Emails'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_activities_emails_OPS_individu.php',
            'to_module' => 'OPS_individu'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_type_document_documents_Documents.php',
            'to_module' => 'Documents'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_type_document_documents_OPS_type_document.php',
            'to_module' => 'OPS_type_document'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_journal_detail_ops_journal_OPS_journal_detail.php',
            'to_module' => 'OPS_journal_detail'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_journal_detail_ops_journal_OPS_journal.php',
            'to_module' => 'OPS_journal'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_appairage_ops_journal_OPS_appairage.php',
            'to_module' => 'OPS_appairage'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_ops_localisation_OPS_localisation.php',
            'to_module' => 'OPS_localisation'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_ops_localisation_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_documents_Documents.php',
            'to_module' => 'Documents'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_documents_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),
        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_documents_Documents.php',
            'to_module' => 'Documents'
        ),
        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_documents_OPS_individu.php',
            'to_module' => 'OPS_individu'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_activities_calls_Calls.php',
            'to_module' => 'Calls'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_activities_calls_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_activities_meetings_Meetings.php',
            'to_module' => 'Meetings'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_activities_meetings_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_activities_notes_Notes.php',
            'to_module' => 'Notes'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_activities_notes_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_activities_tasks_Tasks.php',
            'to_module' => 'Tasks'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_activities_tasks_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_activities_emails_Emails.php',
            'to_module' => 'Emails'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_activities_emails_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_notes_Notes.php',
            'to_module' => 'Notes'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_notes_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dispositif_ops_dossier_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dispositif_ops_dossier_OPS_dispositif.php',
            'to_module' => 'OPS_dispositif'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_ops_dossier_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_ops_dossier_OPS_individu.php',
            'to_module' => 'OPS_individu'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_ops_appairage_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_historisation_ops_dossier_OPS_historisation.php',
            'to_module' => 'OPS_historisation'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_historisation_ops_dossier_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_integrites_req_ops_integrites_OPS_integrites_req.php',
            'to_module' => 'OPS_integrites_req'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_integrites_req_ops_integrites_OPS_integrites.php',
            'to_module' => 'OPS_integrites'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dossier_ops_journal_OPS_dossier.php',
            'to_module' => 'OPS_dossier',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_liquidation_documents_Documents.php',
            'to_module' => 'Documents'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_liquidation_documents_OPS_liquidation.php',
            'to_module' => 'OPS_liquidation'
        ),
        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_engagement_documents_Documents.php',
            'to_module' => 'Documents'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_engagement_documents_OPS_engagement.php',
            'to_module' => 'OPS_engagement'
        ),
        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_campagne_documents_Documents.php',
            'to_module' => 'Documents'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_campagne_documents_OPS_campagne.php',
            'to_module' => 'OPS_campagne'
        ),
        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_documents_Documents.php',
            'to_module' => 'Documents'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_documents_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_engagement_ops_liquidation_OPS_liquidation.php',
            'to_module' => 'OPS_liquidation'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_engagement_ops_liquidation_OPS_engagement.php',
            'to_module' => 'OPS_engagement'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_engagement_ops_dossier_OPS_engagement.php',
            'to_module' => 'OPS_engagement'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_engagement_ops_dossier_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dispositif_ops_piece_OPS_piece.php',
            'to_module' => 'OPS_piece'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dispositif_ops_piece_OPS_dispositif.php',
            'to_module' => 'OPS_dispositif'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_commission_ops_dossier_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_commission_ops_dossier_OPS_commission.php',
            'to_module' => 'OPS_commission'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_tranche_ops_dossier_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_tranche_ops_dossier_OPS_tranche.php',
            'to_module' => 'OPS_tranche'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_tranche_ops_exercice_OPS_tranche.php',
            'to_module' => 'OPS_tranche'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_tranche_ops_exercice_OPS_exercice.php',
            'to_module' => 'OPS_exercice'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_ops_dossier_OPS_dossier.php',
            'to_module' => 'OPS_dossier'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_ops_dossier_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_ops_domiciliation_OPS_domiciliation.php',
            'to_module' => 'OPS_domiciliation',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_ops_domiciliation_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_ops_appairage_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_ops_individu_OPS_individu.php',
            'to_module' => 'OPS_individu',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_ops_individu_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_calls_Calls.php',
            'to_module' => 'Calls',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_calls_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_meetings_Meetings.php',
            'to_module' => 'Meetings',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_meetings_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_notes_Notes.php',
            'to_module' => 'Notes',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_notes_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_tasks_Tasks.php',
            'to_module' => 'Tasks',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_tasks_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_emails_Emails.php',
            'to_module' => 'Emails',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_emails_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_ops_domiciliation_OPS_domiciliation.php',
            'to_module' => 'OPS_domiciliation',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_ops_domiciliation_OPS_individu.php',
            'to_module' => 'OPS_individu',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_domiciliation_ops_banque_OPS_domiciliation.php',
            'to_module' => 'OPS_domiciliation',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_domiciliation_ops_banque_OPS_banque.php',
            'to_module' => 'OPS_banque',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_campagne_ops_dossier_OPS_dossier.php',
            'to_module' => 'OPS_dossier',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_campagne_ops_dossier_OPS_campagne.php',
            'to_module' => 'OPS_campagne',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_elu_ops_dossier_OPS_dossier.php',
            'to_module' => 'OPS_dossier',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_elu_ops_dossier_OPS_elu.php',
            'to_module' => 'OPS_elu',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_reunion_ops_dossier_OPS_reunion.php',
            'to_module' => 'OPS_reunion',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_reunion_ops_dossier_OPS_dossier.php',
            'to_module' => 'OPS_dossier',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_domiciliation_ops_appairage_OPS_domiciliation.php',
            'to_module' => 'OPS_domiciliation',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_ops_journal_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_domiciliation_ops_journal_OPS_domiciliation.php',
            'to_module' => 'OPS_domiciliation',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_type_personne_ops_personne_morale_OPS_personne_morale.php',
            'to_module' => 'OPS_personne_morale',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_type_personne_ops_personne_morale_OPS_type_personne.php',
            'to_module' => 'OPS_type_personne',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_type_personne_ops_individu_OPS_individu.php',
            'to_module' => 'OPS_individu',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_type_personne_ops_individu_OPS_type_personne.php',
            'to_module' => 'OPS_type_personne',
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_campagne_ops_dispositif_OPS_campagne.php',
            'to_module' => 'OPS_campagne'
        ),

        array(
            'from' => '<basepath>/SugarModules/relationships/vardefs/ops_campagne_ops_dispositif_OPS_dispositif.php',
            'to_module' => 'OPS_dispositif'
        ),

    ),

    'layoutfields' => array(

        array(
            'additional_fields' => array(
                'Calls' => 'ops_individu_activities_calls_name'
            )
        ),

        array(
            'additional_fields' => array(
                'Meetings' => 'ops_individu_activities_meetings_name'
            )
        ),

        array(
            'additional_fields' => array(
                'Notes' => 'ops_individu_activities_notes_name'
            )
        ),

        array(
            'additional_fields' => array(
                'Tasks' => 'ops_individu_activities_tasks_name'
            )
        ),

        array(
            'additional_fields' => array(
                'Calls' => 'ops_personne_morale_activities_calls_name',
            ),
        ),

        array(
            'additional_fields' => array(
                'Meetings' => 'ops_personne_morale_activities_meetings_name',
            ),
        ),

        array(
            'additional_fields' => array(
                'Notes' => 'ops_personne_morale_activities_notes_name',
            ),
        ),

        array(
            'additional_fields' => array(
                'Tasks' => 'ops_personne_morale_activities_tasks_name',
            ),
        ),
    )
);
