<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

class hook_individu {

    //
    // Fonction d'initialisation du numéro de l'individu
    //
    function set_num_individu(&$bean, $event, $arguments = null) 
    {        
        if($event != 'before_save'){
          return;
        }
        
        if (empty($bean->num_individu)) {
            global $db;
            
            $sql_num = 'SELECT num_individu FROM ops_individu WHERE deleted = 0 AND num_individu != "" ORDER BY num_individu DESC LIMIT 1';
            
            $result_num = $db->query($sql_num);
            if(!$result_num) {
                return $db->lastError();
            }
            
            if ($db->getRowCount($result_num) == 0) {
                $bean->num_individu=1;
            } else {
                $row_num = $db->fetchByAssoc($result_num) ;
                $bean->num_individu=$row_num['num_individu']+1;
            }
        }
    }                        

  
}

?>
