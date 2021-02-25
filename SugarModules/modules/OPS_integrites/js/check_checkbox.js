
/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

var counter = 0;

function afficherLesValeursDesRequetes(numLigne) {
	var name = "#valeurRequete" + numLigne;
	var newSRC = "#bouton_show" + numLigne;
	var checkbox = ".requete_checkbox" + numLigne;

	if (jQuery(name).css("display") == "none") {
		jQuery(name).css("display", "block");
		jQuery(checkbox).css("visibility", "visible");
		jQuery(newSRC).attr("src", "modules/OPS_integrites/images/less.png");
		jQuery(newSRC).attr("height", "100%");
	} else {
		jQuery(name).css("display", "none");
		jQuery(checkbox).css("visibility", "hidden");
		jQuery(newSRC).attr("src", "modules/OPS_integrites/images/add.png");
		jQuery(newSRC).attr("height", "30%");
	}
	//console.log("après", $(newSRC).attr("src");
}

function afficherLesValeursDesRequetesApresLancement(integrite_id, requete_id, conseil_id) {
	var name = "#resultat-requete" + integrite_id;
	name+= requete_id;
	var newSRC = "#bouton_show_req" + integrite_id;
	newSRC += requete_id;

	var name_conseil = "#conseil-requete" + conseil_id;
	name_conseil += integrite_id;
	name_conseil += requete_id;

	if (jQuery(name).css("display") == "none") {
		
		jQuery(".tableau-resultat").css("display", "none");
		jQuery(".conseil").css("display", "none");
		jQuery(".bouton_show_req").attr("src", "modules/OPS_integrites/images/add.png");

		jQuery(name).css("display", "block");
		jQuery(newSRC).attr("src", "modules/OPS_integrites/images/less.png");
		jQuery(newSRC).attr("height", "100%");
		
		jQuery(name_conseil).css("display", "block");
	} else {
		jQuery(name).css("display", "none");
		jQuery(newSRC).attr("src", "modules/OPS_integrites/images/add.png");
		jQuery(newSRC).attr("height", "30%");

		jQuery(name_conseil).css("display", "none");
	}
}

function afficherConseil(id_conseil, integrite_id, requete_id) {

	var name = "#conseil-requete" + id_conseil;
	name += integrite_id;
	name += requete_id;
	
	var newSRC = "#bouton_show_conseil" + id_conseil;
	newSRC += integrite_id;
	newSRC += requete_id;
	

	if (jQuery(name).css("display") == "none") {
		
		jQuery(".conseil").css("display", "none");
		jQuery(".bouton_show_conseil").attr("src", "modules/OPS_integrites/images/add.png");

		jQuery(name).css("display", "block");
		jQuery(newSRC).attr("src", "modules/OPS_integrites/images/less.png");
		jQuery(newSRC).attr("height", "100%");
		

	} else {
		jQuery(name).css("display", "none");
		jQuery(newSRC).attr("src", "modules/OPS_integrites/images/add.png");
		jQuery(newSRC).attr("height", "30%");
	}	
}

function checkNbCaseCocher() {
	var compteur = 0;
	for( var i = 0; i < jQuery("input[type='checkbox']").length; i++) {
		if( jQuery("input[type='checkbox']").checked )
			compteur++;
	}
	return compteur;
}

$("input[type='checkbox']").change(function() {
	if(this.checked){
		counter++;
	} else {
		counter--;
	}
	console.log(counter);
	if( counter < 1) {
		jQuery("#button-launch").css("visibility", "hidden");
	} else {
		jQuery("#button-launch").css("visibility", "visible");
	}

});

