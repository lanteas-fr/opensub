
<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class OPS_statutController extends SugarController
{


    /**
     * @access public
     * action_updateStatut()
     * Fonction qui met à jour le statut du dossier 
     * 
     * @return json     $data
     */
    public function action_updateStatut()
    {
        $libelle_erreur = "";
        $statut_updated = false; // $_REQUEST;

        do {

            if (empty($_REQUEST["data"])) {
                break;
            }

            $donnees = json_decode(base64_decode($_REQUEST["data"]), true);

            // On vérifie que l'id du dossier n'est pas vide
            if (empty($donnees["dossier_id"])) {
                $libelle_erreur = "Le dossier n'a pas pu etre récupérer";
                break;
            }

            // On vérifie qu'on a bien l'id du nouveau statut
            if (empty($donnees["statut"])) {
                $libelle_erreur = "Le statut n'a pas pu etre récupérer";
                break;
            }

            // On récupere le dossier 
            $obj_dossier = BeanFactory::getBean('OPS_dossier', $donnees["dossier_id"]);
            if (!empty($obj_dossier->id)) {
                // On modifie le statut
                $statut_updated = $obj_dossier->updateStatut($donnees["statut"]);
            }
        } while (0);

        // Si le dossier a bien été crée on retourne l'id sinon le libellé de l'erreur
        $data = ($statut_updated) ? array('statut' => 'ok', 'data' => array('result' => $statut_updated)) : array('statut' => 'err', 'data' => $libelle_erreur);

        ob_clean();
        echo json_encode($data);
        sugar_cleanup(true);
    }
}
