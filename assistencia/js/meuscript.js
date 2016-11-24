$(document).ready(function inicio(e){

	$('a').not('#buten').click (function botao(e){
		
		e.preventDefault();
		var href = $(this) . attr('href');
		$('#conteudo').load(href + ' #conteudo > *', function(e){
			
			$("#data").datepicker({ maxDate: new Date() });
			$("#telefone").mask("(00) 00000-0000");
			$("#cpf").mask("000.000.000-00");
			
			carregaCalendario();
				
			jQuery('#ajax_post').submit(function (e) {
				
				var dados = jQuery(this).serialize();
				var url = $("#post").attr('href');
				jQuery.ajax({
					type: "POST",
					url: url,
					data: dados,
					success: function (data){
						if (data == "Registro inserido com sucesso!") {
							alert(data);
							$('#conteudo').load(href + ' #conteudo > *', function (e) {
							$("#data").datepicker({ maxDate: new Date() });
							$("#telefone").mask("(00) 00000-0000");
							$("#cpf").mask("000.000.000-00");
							var res = href.split(".");
							$(' #' + res[0] + '').trigger("click");
							});
						} else {
							alert(data);
						}
					}
				});
				return false;
			});
	
			jQuery('#delete').click(function (e) {
				var url = $("#delete").attr('href');
				jQuery.ajax({
					type: "POST",
					url: url,
					success: function (data){
						if (data == "Registro deletado com sucesso!") {
							$('#conteudo').load(href + ' #conteudo > *', function (e) {
							inicio(e);
							var res = href.split(".");
							$(' #' + res[0] + '').trigger("click");
							alert(data);
							botao(e);
							});
						}else{
							alert(data);
						}
					}
				});
				
				return false;
			});
		});
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
	
	carregaCalendario();
});

function daysInMonth(month,year){
	
    return new Date(year, month, 0).getDate();
}

function carregaCalendario(){
	
	var phpResponse = "";
	var today = new Date();
	var month = today.getMonth()+1;
	var year = today.getFullYear();
	
	$.ajax({
		
		type: 'GET',
		url: 'php/requestEvents.php',
		data: {
			
			month: month,
			year: year,
			num_days: daysInMonth(month, year)
		},
		complete: function(response){
			
			phpResponse = response.responseText;
		},
		error: function(){
			
			alert("Erro!");
		}
	});
	
	$('.calendar').fullCalendar({
				
		customButtons: {
			add_evento: {
				text: 'Adicionar Evento',
				click: function() {
					
					alert(phpResponse);
				}
			}
		},
		header: {
			left: 'title',
			center: 'add_evento',
			right: 'today prev,next'
		},
		
		handleWindowResize: true,
		fixedWeekCount: false
	});
}
