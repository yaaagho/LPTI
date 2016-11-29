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
	
	//var phpResponse = "";
	
	/*$.ajax({
		
		type: 'GET',
		url: 'php/requestEvents.php',
		data: {
			
			month: month,
			year: year,
			num_days: daysInMonth(month, year)
		},
		complete: function(response){
			
			alert(response.responseText);
			phpResponse = JSON.parse(response.responseText);
		},
		error: function(){
			
			alert("Erro!");
		}
	});*/
	
	$('.calendar').fullCalendar({
		
		customButtons: {
			add_evento: {
				text: 'Testador Supremo',
				click: function() {
					
					alert(month);
				}
			},
			listar:{
				
				text: 'Listar todos os eventos',
				click: function(){
					
					var view = $('.calendar').fullCalendar('getView');
					if (view.title == 'month'){
						
						$(".calendar").fullCalendar('changeView', 'listMonth');
					}else{
						
						$(".calendar").fullCalendar('changeView', 'month');
					}
				}
			},
			prev: {
				
				icon: 'left-single-arrow',
				click: function(){
					
					if (month > 1){
						
						month = month - 1;
					}else{
						
						month = 12;
						year = year - 1;
					}
					$('.calendar').fullCalendar('prev');
					loadEvents(month, year);
				}
			},
			next: {
				
				icon: 'right-single-arrow',
				click: function(){
					
					if (month < 12){
						
						month = month + 1;
					}else{
						
						month = 1;
						year = year + 1;
					}
					$('.calendar').fullCalendar('next');
					loadEvents(month, year);
				}
			},
			today: {
				
				text: 'Hoje',
				click: function(){
					
					month = today.format('MM');
					year = parseInt(today.format('YYYY'));
					$('.calendar').fullCalendar('today');
					loadEvents(month, year);
				}
			}
		},
		header: {
			left: 'title',
			center: 'listar',
			right: 'today prev,next'
		},
		
		handleWindowResize: true,
		fixedWeekCount: false
	});
	
	var today = $('.calendar').fullCalendar('getDate');
	var month = today.format('MM');
	var year = parseInt(today.format('YYYY'));
	
	loadEvents(month, year);
	
	$(".feq-button").mouseover(function() {
		
		$(this).animate({
			
			backgroundColor: "#3D74BE"
		});
	}).mouseout(function(){
		
		if ($(this).data("value") == "1"){
			
			$(this).animate({
				
				backgroundColor: "#C4DDFF"
			});
		}else{
			
			$(this).animate({
				
				backgroundColor: "#1856A9"
			});
		}
	});
	
	$(".feq-button").click(function() {
		
		if ($(this).data("value") == "0"){
			
			$(this).animate({
				
				color: "#000",
				backgroundColor: "#C4DDFF"
			});
			$(this).data("value", "1");
		}else{
			
			$(this).animate({
				
				color: "#FFF",
				backgroundColor: "#1856A9"
			});
			$(this).data("value", "0");
		}
	});
}

function loadEvents(month, year){
	
	$('.calendar').fullCalendar({
				
		eventSources: 'php/requestEvents.php?month='+month+'&year='+year+'&num_days='+daysInMonth(month, year)
	});
}

function freq(){
	
	if ($('#frequencia').val() == 'custom'){
		
		$('#custom').slideDown(200);
	}else{
		
		$('#custom').hide();
	}
}

function verificaEvento(){
	
	var freq = [];
	$(".feq-button").each(function(){
		
		var object = $(this);
		freq.push(object.data("value"));
	});
	var frequencia = freq.toString();
	$("#frequencia").attr("value", frequencia);
}
