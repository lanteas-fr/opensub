<?php
if (!defined('sugarEntry'))
    define('sugarEntry', true);

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

global $db, $beanFiles, $log, $current_user, $app_list_strings;

require_once('include/entryPoint.php');

$current_user = $_SESSION["current_user"];

if (isset($_POST['idDispositif']) && !empty($_POST['idDispositif'])) {

    $obj_dispositif = new OPS_dispositif();
    $obj_dispositif->retrieve($_POST['idDispositif']);
    $thematiques = $obj_dispositif->recup_thematique();

    $liste_thematique = explode(",", $thematiques);
    $liste_thematique = str_replace("^", "", $liste_thematique);
    natsort($liste_thematique);


    foreach ($liste_thematique as $key => $value) {

        $liste_thema[$value] = $app_list_strings['ops_thematique_list'][$value];
    }

    if (is_array($liste_thema) && count($liste_thema) > 0) {
        echo json_encode($liste_thema);
    } else {

        echo json_encode("null");
    }
} else {
    echo json_encode("null");
}
