<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

require_once('service/core/SugarRestService.php');
 
class  ODEService extends SugarRestService
{
    public function __construct($url)
    {
        parent::__construct($url);
    }
 
}
?>