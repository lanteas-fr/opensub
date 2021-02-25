<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/OPS_dossier/OPS_dossier.php');

class OPS_dossierDashlet extends DashletGeneric {
    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require('modules/OPS_dossier/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'OPS_dossier');
        }

        $this->searchFields = $dashletData['OPS_dossierDashlet']['searchFields'];
        $this->columns = $dashletData['OPS_dossierDashlet']['columns'];

        $this->seedBean = new OPS_dossier();        
    }
}
