 <?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

class ODEServiceUtils
{
    
    public function get_field_relate($bean, $field)
    {
        
        global $beanFiles, $sugar_config;
        
        if ($bean->field_defs[$field]['type'] == 'relate') {
            
            if (!empty($bean->fetched_row[$bean->field_defs[$field]['id_name']])) {

                $module = $bean->field_defs[$field]['module'];
                
                if (substr($module, 0, 3) != "OPS") {
                    
                    //Retrait du S sur les modules Basic de SuiteCRM
                    $module = substr($module, 0, -1);
                }
                
                require_once($beanFiles[$module]);
                $obj_module = new $module();
                $obj_module->retrieve($bean->fetched_row[$bean->field_defs[$field]['id_name']]);
                
                return $obj_module->name;

            } else {
                
                return false;
                
            }
            
        }
    }


    public function formater_html( $tab ){

        foreach ($tab as $key => $value) {
            
            $value_bis = mb_convert_encoding($value,'HTML-ENTITIES','UTF-8');  
            $tab[$key] = mb_convert_encoding($value_bis, 'UTF-8', 'HTML-ENTITIES');  
        
        }

        return $tab ; 
    }
    
} 