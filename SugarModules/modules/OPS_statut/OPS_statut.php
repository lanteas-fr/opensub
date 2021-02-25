<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


class OPS_statut extends Basic
{
    public $new_schema = true;
    public $module_dir = 'OPS_statut';
    public $object_name = 'OPS_statut';
    public $table_name = 'ops_statut';
    public $importable = false;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;
    public $code_couleur;
    public $avancement;
    public $ordre;
    public $nom_statut_gru;

    public function bean_implements($interface)
    {
        switch ($interface) {
            case 'ACL':
                return true;
        }

        return false;
    }

    function liste_statuts($obj_dossier)
    {

        $liste_statuts = array();

        do {

            // Vérification que l'objet $obj_dossier est bien une instance de OPS_dossier
            if (empty($obj_dossier->id)) {
                $GLOBALS['log']->fatal(" OPS_statut :: liste_statuts() =>  obj_dossier non initialisé ");
                break;
            }

            // Récupération du dispositif lié au dossier pour récupérer le guide d'instruction
            $liste_dispositifs = $obj_dossier->get_linked_beans('ops_dispositif_ops_dossier', 'OPS_dispositif');
            if (!is_array($liste_dispositifs) || count($liste_dispositifs) === 0) {
                $GLOBALS['log']->fatal(" OPS_statut :: liste_statuts() => Aucun dispositif n'est rattaché au dossier id = " . $obj_dossier->id);
                break;
            } else {
                $dispositif = $liste_dispositifs[0];
            }

            // On récupere la liste des guides associé au dispositif
            $liste_guides = $dispositif->get_linked_beans('ops_guide_instruction_ops_dispositif', 'OPS_guide_instruction');
            if (!is_array($liste_guides) || count($liste_guides) === 0) {
                $GLOBALS['log']->fatal(" OPS_statut :: liste_statuts() => Aucun guide d'instruction n'est rattaché au dispositif id = " . $dispositif->id);
                break;
            } else {
                $obj_guide_instruction = $liste_guides[0];
            }

            // Si le dossier n'a pas de statut, on retourne les statuts de l'étape initiale du guide d'instruction
            if (empty($obj_dossier->ops_statut_id)) {

                // On récupere le statut d'initialisation associé au guide d'instruction
                $statut_initial = BeanFactory::getBean('OPS_statut', $obj_guide_instruction->ops_statut_id);

                // On récupere l'etape associé au statut d'initialisation
                $liste_etapes = (!empty($statut_initial->id)) ?  $statut_initial->get_linked_beans('ops_etape_ops_statut', 'OPS_etape') : false;
                $etape_initiale = (is_array($liste_etapes) && count($liste_etapes) > 0) ? $liste_etapes[0] : false;

                $etape_statuts = ($etape_initiale !== false) ? $etape_initiale->getListeStatuts() : array();

                if (!is_array($etape_statuts) || count($etape_statuts) === 0) {
                    $GLOBALS['log']->fatal(" OPS_statut :: liste_statuts() => Les statuts de l'étape d'initilisation du guide d'instruction non pas pu etre récupérer ");
                } else {
                    $liste_statuts = $etape_statuts;
                }

                break;
            }

            // On récupere l'object OPS_statut du statut associé au dossier 
            $obj_statut = BeanFactory::getBean('OPS_statut', $obj_dossier->ops_statut_id);
            if (empty($obj_statut->id)) {
                $GLOBALS['log']->fatal(" OPS_statut :: liste_statuts() =>  Le statut id = " . $obj_dossier->ops_statut_id . " n'a pas pu etre recupérer");
                break;
            }

            // On récupere l'étape associé au statut
            $liste_etapes = $obj_statut->get_linked_beans('ops_etape_ops_statut', 'OPS_etape');
            $obj_etape = (is_array($liste_etapes) && count($liste_etapes) > 0) ? $liste_etapes[0] : false;

            $statutPrecedentExistant = false;
            if ($obj_etape !== false && $obj_etape->retour_arriere == true) {
                // Récupération des status passés 
                $tab_historiques = $obj_dossier->get_linked_beans('ops_historisation_ops_dossier', 'OPS_historisation', '', '', '', '', "flag_retour = '1'");
                if (is_array($tab_historiques) && count($tab_historiques) > 1)  $statutPrecedentExistant = true;
            }

            // Si l'avancement du statut du dossier === "terminé"
            if ($obj_statut->avancement === "termine") {
                if ($obj_etape->retour_arriere == true && $statutPrecedentExistant === true) {
                    $liste_statuts['precedent'] = "Statut précédent";
                } else {
                    $liste_statuts[''] = "Workflow Terminé";
                }
                break;
            }

            // Si l'avancement du statut du dossier === "courant"
            if ($obj_statut->avancement === "courant") {

                // Ajout du choix Précédent si l'étape courante a la propriété retour arrière
                if ($obj_etape->retour_arriere == true && $statutPrecedentExistant === true) {
                    $liste_statuts['precedent'] = "Statut précédent";
                }
                $etape_statuts = $obj_etape->getListeStatuts();
                $liste_statuts = array_merge($liste_statuts, $etape_statuts);
                break;
            }

            // Si l'avancement du statut du dossier === "suivant"
            if ($obj_statut->avancement === "suivant") {

                // Ajout du choix Précédent si l'étape courante a la propriété retour arrière
                if ($obj_etape->retour_arriere == true && $statutPrecedentExistant === true) {
                    $liste_statuts['precedent'] = "Statut précédent";
                }

                // On récupere l'étape suivante
                $obj_etape_suivante = $obj_etape->getEtapeSuivante();
                if ($obj_etape_suivante !== false) {

                    $etape_suivante_statuts = $obj_etape_suivante->getListeStatuts();
                    $liste_statuts = array_merge($liste_statuts, $etape_suivante_statuts);
                } else {
                    $liste_statuts[''] = "Workflow Terminé";
                }

                break;
            }
        } while (0);

        return $liste_statuts;
    }
}
