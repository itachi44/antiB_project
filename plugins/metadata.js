function substr(str){
	return str.substring(0, 10);
}



function reloadTable(noipd){
	$.post('php/get_metadata.php', {'noipd':noipd}, function(data){
	   	var oData = $.parseJSON(data);
	   	if (oData[0] == undefined) {
	   		$('#metadata').append("<p> Fiche non modifiée <p>")
	   	}else{
		   	$.each(oData, function(k, v) {
	           	$('#metadata').append("<tr>  <td> <input id='chkme' type='checkbox'/> </td>  <td>"+v['label'] +"</td> <td>"+v['avant'] +"</td><td>"+v['apres'] +"</td> <td>"+v['editeur'] +"</td> <td>"+substr(v['datetmps']) +"</td>  </tr>");
                //enabling delete button
                var checker = document.getElementById('chkme');
                var sendbtn = document.getElementById('deleteMetadata');
                // when unchecked or checked, run the function
                checker.onchange = function(){
                    if(this.checked){
                        sendbtn.disabled = false;
                    }else{
                        sendbtn.disabled = true;
                    }
                }
	       	});
	   	}

    });
}

$(document).ready(function(){
	reloadTable('001');

	$("#buttonPdf").click(function(){
		$('#metadata').children().remove();
		var no_ipd = $('#myPdf').val();
		reloadTable(no_ipd);

	});

});








