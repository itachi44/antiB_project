

$(document).ready(function(){

	$("#insertMetadata").click(function() {
      
    	// document.getElementById('no_ipd').value = $("#myPdf").val();
	    //call blockui form
        $.blockUI({
            onOverlayClick: $.unblockUI,
            message: $("#show_modification"),
            css: {
                left: '10%',
                top: '5%',
		        width:'60%',
		        height: '95%'
                }
            });
            return false;                        
  	});

	$("#insertMetadata2").click(function() {
      
    	// document.getElementById('no_ipd').value = $("#myPdf").val();
	    //call blockui form
        $.blockUI({
            onOverlayClick: $.unblockUI,
            message: $("#show_modification2"),
            css: {
                left: '10%',
                top: '5%',
		        width:'80%',
		        height: '95%'
                }
            });
            return false;                        
  	});

	$("#insertMetadata3").click(function() {
      
    	// document.getElementById('no_ipd').value = $("#myPdf").val();
	    //call blockui form
        $.blockUI({
            onOverlayClick: $.unblockUI,
            message: $("#show_modification3"),
            css: {
                left: '10%',
                top: '2%',
		        width:'80%',
		        height: '95%'
                }
            });
            return false;                        
  	});




    //controling modification button
    $('#sub').attr('disabled',true);
    $('#editeur').keyup(function(){
        if($(this).val().length !=0)
            $('#sub').attr('disabled', false);
        else
            $('#sub').attr('disabled',true);
    })


});

//not inside (document.ready)-----------
$("#sub").click(function() {
	// var data = $("#myForm :input").serializeArray();
	$.post($("#myForm").attr("action"), $("#myForm :input").serializeArray(), function(info) {$("#result").html(info); } );

});

$("#myForm").submit(function() {
	return false;

});


function validateForm() {
    var a = document.getElementById("message").value;
    var b = document.getElementById("avant").value;
    var c = document.getElementById("apres").value;
    var d = document.getElementById("no_ipd").value;
    if (a == null || a == "", b == null || b == "", c == null || c == "", d == null || d == "") {
        alert("Merci de remplir les champs vide avant de continuer");
        return false;

    }
}






