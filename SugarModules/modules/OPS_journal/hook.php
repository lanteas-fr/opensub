<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

class hook_journal {

    function delete_journal_details(&$bean, $event, $arguments = null) 
    {        
        if($event != 'before_delete'){
          return;
        }

        global $app_list_strings, $beanFiles;
       
        /*
         * Suppression des détails liés
         */
        $listes_details = $bean->get_linked_beans('ops_journal_detail_ops_journal','OPS_journal_detail');   
        foreach ($listes_details as $detail) {
            $detail->mark_deleted($detail->id);
        }
        
    } 

}

?>
