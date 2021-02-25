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
require_once('modules/OPS_personne_morale/OPS_personne_morale.php');

class OPS_personne_moraleDashlet extends DashletGeneric {
    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require('modules/OPS_personne_morale/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'OPS_personne_morale');
        }

        $this->searchFields = $dashletData['OPS_personne_moraleDashlet']['searchFields'];
        $this->columns = $dashletData['OPS_personne_moraleDashlet']['columns'];

        $this->seedBean = new OPS_personne_morale();        
    }
}
