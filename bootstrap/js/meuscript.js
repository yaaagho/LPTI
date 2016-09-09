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
	
	$('#conteudo').css({position:'absolute', left: 60-($('#conteudo').width()/2) + '%', margin:'-'+($('#conteudo').height()/2)+'px 0 0 -'+($('#conteudo').width() / 2)+'px'});
	
	$('.row').hover(
	
		function(){
		
			$(this).children().show();
		},
		
		function(){
			
			$('.col-md-9').hide();
		}
	);
});

function verificaUsuario(){
	
	var nome = document.forms["insere_usuarios"]["nome"].value;
	var senha = document.forms["insere_usuarios"]["senha"].value;
	var telefone = document.forms["insere_usuarios"]["telefone"].value;
	var email = document.forms["insere_usuarios"]["email"].value;
	var teste = false;
	
	//testando o nome
	if (nome == null || nome == ""){
		
		teste = false;
	}
	
	var teste_nome = nome.split(' ');
	
	if (teste_nome.lenght < 2){
		
		teste = false;
	}
	
	//testando a senha
	if (senha.lenght < 4 || senha == null || senha == ""){
		
		teste = false;
	}
	
	//testando o email
	var teste_email = email.split('@');
	teste_email = teste_email.split('.');
	
	if (teste_email.lenght != 3){
		
		teste = false;
	}
	
	//testando o telefone
	if (telefone.lenght != 9 || telefone == null || telefone == ""){
		
		teste = false;
	}
	
	//finalização
	if (teste == false){
		
		alert("Informações incorretas!");
		return false;
	}else{
		
		return true;
	}
};

function verificaDinheiro(){
	
	
};
