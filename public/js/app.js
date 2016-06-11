$(document).ready(function(){
	$('.content #step2').hide();
	$('.content #wellcome button').click(function(){
		$('.content #wellcome').hide('fast');
		$('.content #step2').show('slow');
	})
	$('#step2 select').on('change', function(){
		if($(this).val()>0 && $(this).val()<9){
			$('#step2 a').attr('disabled',false);
			$('#step2 a').attr('href','carrera/'+$(':selected').attr('id'));
		}
		else {
			$('#step2 a').attr('disabled',true);
		}
	});
	$('#step2 a').click(function(event){
		if($(this).attr('disabled'))
		{
			event.preventDefault();
		}
	});
});