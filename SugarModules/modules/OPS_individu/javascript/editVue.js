
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/


$(document).ready(function() {
   	var tel1 = document.getElementById("phone_home") ;
   	var tel2 = document.getElementById("phone_mobile") ; 
	tel1.onblur = function() {
    	verif_tel("phone_home") ;
	}; 
	tel2.onblur = function() {
    	verif_tel("phone_mobile") ;
	}; 
});


function verif_tel( type ){

	var estValide;
	var tel = document.getElementById(type).value ;
    
    tel = tel.replace(/ /gi , "");

    var valide=/^0[1-6]\d{8}$/;

    if(	!valide.test(tel)){
		
		estValide = false;
  
    }
   

	if( estValide == false ){

		document.getElementById(type).style.backgroundColor = "red";

	}
	else{

		document.getElementById(type).style.backgroundColor = "#c3e7fd";

	}	

}