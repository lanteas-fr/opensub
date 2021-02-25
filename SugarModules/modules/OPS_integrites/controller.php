<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

require_once('include/MVC/Controller/SugarController.php');
  
 class OPS_integritesController extends SugarController
{
    function action_console(){
        $this->view = "console";
    }

}
