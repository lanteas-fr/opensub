<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

class hook_statut {

   
    function modif_subpannel($bean, $event, $arguments = null) {

    	if ( $bean->module_dir != $_GET['module'] ) {
    		
        		$couleur = $bean->code_couleur ;

				$bean->code_couleur = '<i style="background-color:'.$couleur.'; width:110px; 
										height:20px;  
										text-decoration:none; 
										color:white;
										text-align:center; 
										font-weight:bold; 
										padding:5px 20px " class="fa fa-square fa-lg"></i>';
    	}        
    }
    

}

?>
