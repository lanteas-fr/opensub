<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

class hook_employees {

    function add_employees(&$bean, $event, $arguments = null) 
    {        
        if($event != 'before_save'){
          return;
        }

        global $app_list_strings, $beanFiles;
       
        $bean->employee_unite_travail = $_REQUEST['employee_unite_travail'];
        $bean->employee_service= $_REQUEST['employee_service'];
        $bean->employee_direction= $_REQUEST['employee_direction'];
        $bean->employee_pole= $_REQUEST['employee_pole'];
        $bean->employee_direction_generale= $_REQUEST['employee_direction_generale'];
        $bean->save();
        
    } 
    
    

}

?>
