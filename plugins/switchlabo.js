

$(document).ready(function () {

	//Hide all elements at the beginning
	$("#bacterioform").hide();
	$("#respform").hide();
	$("#arboform").hide();


	// All for bacterio
	$("#buttonBacterio").click(function () {
		$("#respform").hide();
		$("#arboform").hide();
		$("#bacterioform").show();
	});

	// showing different elements for Bacteries recherchees :
	$("#bacteries_recherchees").on('change', function () {
		if ($(this).val() == "oui") {
			var x = document.getElementsByClassName("info_bacteries_recherchees");
			x[0].style.display = "table";
		} else {
			var x = document.getElementsByClassName("info_bacteries_recherchees");
			x[0].style.display = "none";
		}
	});

	//showing element for Présence d'éléments étrangers: Parasites adultes bacterio
	$("#presence_element_etranger").on('change', function () {

		if ($(this).val() == "oui") {
			var x = document.getElementsByClassName("label_oui_presence_element_etranger");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "inline";
			}
		} else {
			var x = document.getElementsByClassName("label_oui_presence_element_etranger");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
		}
	});

	//showing element for Présence d'éléments étrangers: Parasites adultes bacterio && autres autres 
	$("#oui_presence_element_etranger").on('change', function () {

		if ($(this).val() == "autres") {
			var x = document.getElementsByClassName("oui_presence_element_etranger_autre");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "inline";
			}
		} else {
			var x = document.getElementsByClassName("oui_presence_element_etranger_autre");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
		}
	});

	//showing element for oeufs: 
	$("#oeufs").on('change', function () {
		if ($(this).val() == "presence") {
			var x = document.getElementsByClassName("presence_oeufs");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "inline";
			}
		} else {
			var x = document.getElementsByClassName("presence_oeufs");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
		}
	});
	//showing element for autres parasites bacteries: 
	$("#autres_parasites_bac").on('change', function () {
		if ($(this).val() == "presence") {
			var x = document.getElementsByClassName("autres_parasites_bac");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "inline";
			}
		} else {
			var x = document.getElementsByClassName("autres_parasites_bac");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
		}
	});



	// All for Respiratory viruses
	//-----------------------------
	$("#buttonResp").click(function () {
		$("#bacterioform").hide();
		$("#arboform").hide();
		$("#respform").show();
	});
	// showing different elements for Virus influenza
	$("#virus_influenza").on('change', function () {
		if ($(this).val() == "oui") {
			var x = document.getElementsByClassName("info_virus_influenza");
			x[0].style.display = "table";
		} else {
			var x = document.getElementsByClassName("info_virus_influenza");
			x[0].style.display = "none";
			var y = document.getElementsByClassName("info_influenza_A");
			y[0].style.display = "none";
			var z = document.getElementsByClassName("info_influenza_B");
			z[0].style.display = "none";
			var t = document.getElementsByClassName("info_autres_virus_respiratoires");
			t[0].style.display = "none";
		}
	});
	// showing different elements for Virus influenza "A"
	$("#influenza_A").on('change', function () {
		if ($(this).val() == "oui") {
			var x = document.getElementsByClassName("info_influenza_A");
			x[0].style.display = "table";
		} else {
			var x = document.getElementsByClassName("info_influenza_A");
			x[0].style.display = "none";
		}
	});
	// showing different elements for Virus influenza "B"
	$("#influenza_B").on('change', function () {
		if ($(this).val() == "oui") {
			var x = document.getElementsByClassName("info_influenza_B");
			x[0].style.display = "table";
		} else {
			var x = document.getElementsByClassName("info_influenza_B");
			x[0].style.display = "none";
		}
	});
	// showing different elements for Autres virus respiratoires:
	$("#autres_virus_respiratoires").on('change', function () {
		if ($(this).val() == "oui") {
			var x = document.getElementsByClassName("info_autres_virus_respiratoires");
			x[0].style.display = "table";
		} else {
			var x = document.getElementsByClassName("info_autres_virus_respiratoires");
			x[0].style.display = "none";
		}
	});




	// All for Arboviruses
	$("#buttonArbo").click(function () {
		$("#bacterioform").hide();
		$("#respform").hide();
		$("#arboform").show();
	});




	// SADJI -- Antibiogramme

	// showing different elements for Antibiogramme
	$("#antibiogramme_fait").on('change', function () {
		if ($(this).val() == "oui") {
			var x = document.getElementsByClassName("ipg");
			x[0].style.display = "table";
			//x[1].style.display = "table";
		} else {
			var x = document.getElementsByClassName("ipg");
			x[0].style.display = "none";
			//x[1].style.display = "none";

		}
	});





});
