$(document).ready(function(){

  	//showing element for fever 
	  $("#fievre").on('change',function(){
        
    	if ($(this).val() == "1") {
			var x = document.getElementsByClassName("infofievre");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "inline";
			}			
    	}else{
			var x = document.getElementsByClassName("infofievre");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
		}
    });

  	//showing element for palu
	  $("#palu_suspecte").on('change',function(){
        
    	if ($(this).val() == "1") {
			var x = document.getElementsByClassName("infopalu");	
			x[0].style.display = "table";				
    	}else{
			var x = document.getElementsByClassName("infopalu");	
			x[0].style.display = "none";		
		}
    });

  	//showing element for grippe
	  $("#grippe_suspecte").on('change',function(){
        
    	if ($(this).val() == "1") {
			var x = document.getElementsByClassName("infogrippe");		
			x[0].style.display = "table";					
    	}else{
			var x = document.getElementsByClassName("infogrippe");		
			x[0].style.display = "none";	
		}
    });

  	//showing element for arbo
	  $("#arbo").on('change',function(){
        
    	if ($(this).val() == "1") {
			var x = document.getElementsByClassName("infoarbo");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "inline";
			}					
    	}else{
			var x = document.getElementsByClassName("infoarbo");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			var x = document.getElementsByClassName("infoDateArbo");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}	
		} 
    });

  	
	$('.prelevement_sanguin_oui').click(function() {
		if($("#prelevement_sanguin_oui").prop("checked")){
			var x = document.getElementsByClassName("infoDateArbo");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "inline";
			}	
		}else {
			var x = document.getElementsByClassName("infoDateArbo");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
		}
    });


  	//showing element for antécedent voyage 
	  $("#antecedent_voyage").on('change',function(){
        
    	if ($(this).val() == "1") {
			var x = document.getElementsByClassName("infovoyage");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "inline";
			}					
    	}else{
			var x = document.getElementsByClassName("infovoyage");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}		
		}
    });

	//showing element for autres signes
	$("#autres_signes").on('change',function(){
        
    	if ($(this).val() == "1") {
			var x = document.getElementsByClassName("infoautresigne");
			x[0].style.display = "table";				
    	}else{
			var x = document.getElementsByClassName("infoautresigne");
			x[0].style.display = "none";	
		}
    });


	//showing element for traitement prescrit 
	$("#traitement_prescrit").on('change',function(){
        
    	if ($(this).val() == "1") {
			var x = document.getElementsByClassName("infotraitementprescrit");
			x[0].style.display = "table";					
    	}else{
			var x = document.getElementsByClassName("infotraitementprescrit");
			x[0].style.display = "none";
			
		}
    });




});



