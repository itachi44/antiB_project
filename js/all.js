$(document).ready(function() {
	
	$('#div_hide_show').mouseover(function(){
		$('#div_menu').show('slow');
		$('#img_plus').hide();
		$('#img_dash').show();
	});

	$('#show_autres_virus').click(function(){
		if($('#div_autres_virus').is(":visible")){
			$('#div_autres_virus').hide('slow');
			$('#show_autres_virus' ).css('background', 'url(../images/arrow_down.png) no-repeat right rgba(0,0,0,.0)');
	        $('#show_autres_virus' ).css('background-position', '70%');
		}
		else{
			$('#div_autres_virus').show('slow');
			$('#show_autres_virus' ).css('background', 'url(../images/arrow_up.png) no-repeat right rgba(0,0,0,.0)');
	        $('#show_autres_virus' ).css('background-position', '70%');
		}
	});
	
	$('#show_sequencage').click(function(){
		if($('#div_sequencage').is(":visible")){
			$('#div_sequencage').hide('slow');
			$('#show_sequencage' ).css('background', 'url(../images/arrow_down.png) no-repeat right rgba(0,0,0,.0)');
	        $('#show_sequencage' ).css('background-position', '70%');
		}
		else{
			$('#div_sequencage').show('slow');
			$('#show_sequencage' ).css('background', 'url(../images/arrow_up.png) no-repeat right rgba(0,0,0,.0)');
	        $('#show_sequencage' ).css('background-position', '70%');
		}
	});
	
	$('#show_arbovirus').click(function(){
		if($('#div_arbovirus').is(":visible")){
			$('#div_arbovirus').hide('slow');
			$('#show_arbovirus' ).css('background', 'url(../images/arrow_down.png) no-repeat right rgba(0,0,0,.0)');
	        $('#show_arbovirus' ).css('background-position', '70%');
		}
		else{
			$('#div_arbovirus').show('slow');
			$('#show_arbovirus' ).css('background', 'url(../images/arrow_up.png) no-repeat right rgba(0,0,0,.0)');
	        $('#show_arbovirus' ).css('background-position', '70%');
		}
	});
	
	
});