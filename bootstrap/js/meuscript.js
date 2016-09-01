$(document).ready(function(e){

	$('a').not('#buten').click (function(e){
		
		e.preventDefault();
		var href = $(this) . attr('href');
		$('#conteudo').load(href + ' #conteudo > *');
	});
	
	$('.col-md-9').hide();
	$('.col-md-9').css("position", "absolute");
	$('.col-md-9').css("margin", "auto");
	$('.col-md-9').css("left", "70px");
	
	$('.row').hover(
	
		function(){
		
			$(this).children().show();
		},
		
		function(){
			
			$('.col-md-9').hide();
		}
	);
});

function ajax(){
	
	$('painel a').click (function (e){
		
			e.preventDefault();
			var href = $(this) . attr('href');
			$('#painel').load(href + '#painel', function(){ ajax(); });
	});
}
