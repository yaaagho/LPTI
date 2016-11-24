$(document).ready(function(e){

	$('a').not('#buten').click (function(e){
		
		e.preventDefault();
		var href = $(this) . attr('href');
		$('#conteudo').load(href + ' #conteudo > *', function(){
			
			$("#data").datepicker({ maxDate: new Date() });
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
	
	$('.calendar').fullCalendar({
		
		customButtons: {
			add_evento: {
				text: 'Adicionar Evento',
				click: function() { alert('Não! Sua Piranha'); }
			}
		},
		header: {
			left: 'title',
			center: 'add_evento',
			right: 'today prev,next'
		},
		events: [{
				"title" : "evento 1",
				"start" : "2016-11-20",
				"end" : "2016-11-21"
		},
		{
				"title" : "evento 2",
				"start" : "2016-11-22",
				"end" : "2016-11-23"
		},
		{
				"title" : "evento 3",
				"start" : "2016-11-24",
				"end" : "2016-11-25"
		}],
		
		handleWindowResize: true,
		fixedWeekCount: false
	});
});

function verificaDoacao(){
	
	var assistido = document.forms["realizarDoacao"]["assistido"].value;
	var quantidade = document.forms["realizarDoacao"]["quantidade"].value;
	var produto = document.forms["realizarDoacao"]["doacao"].value;
	var data = document.forms["realizarDoacao"]["saida"].value;
	
	if (assistido == null || assistido == ""){
		
		alert("Nome da família assistida não foi especificado!");
		return false;
	}
	
	if (produto == null || produto == ""){
		
		alert("Produto não foi especificado!");
		return false;
	}
	
	if (quantidade == null || quantidade == "" || quantidade == 0){
		
		alert("Quantidade de " + produto + " não foi especificada!");
		return false;
	}
	
	if (data == null || data == ""){
		
		alert("Data de saída da doação não foi especificada!");
		return false;
	}
	
	return true;
}

function verificaArrecadacao(){
	
	var doador = document.forms["realizarArrecadacao"]["doador"].value;
	var produto = document.forms["realizarArrecadacao"]["doacao"].value;
	var quantidade = document.forms["realizarArrecadacao"]["quantidade"].value;
	var data = document.forms["realizarArrecadacao"]["entrada"].value;
	
	if (doador == null || doador == ""){
		
		alert("Doador não foi especificado!");
		return false;
	}
	
	if (produto == null || produto == ""){
		
		alert("Produto não foi especificado!");
		return false;
	}
	
	if (quantidade == null || quantidade == "" || quantidade == 0){
		
		alert("Quantidade de " + produto + " não foi especificada!");
		return false;
	}
	
	if (data == null || data == ""){
		
		alert("Data da arrecadação não foi especificada!");
		return false;
	}
	
	return true;
}

function verificaDinheiroA(){
	
	var doador = document.forms["arrecadaDinheiro"]["doador"].value;
	var quantidade = document.forms["arrecadaDinheiro"]["quantidade"].value;
	var data = document.forms["arrecadaDinheiro"]["saida"].value;
	
	if  (doador == null || doador == ""){
		
		alert("Doador não foi especificado!");
		return false;
	}

	if (quantidade == null || quantidade == "" || quantidade == 0){
		
		alert("Quantidade não foi especificada!");
		return false;
	}
	
	if (data == null || data == ""){
		
		alert("Data de arrecadação não foi especificada!");
		return false;
	}
	
	return true;
}


