<?php

// PEGANDO OS DADOS DO FORMULÃ�RIO
$tipo = $_POST ['tipo'];
$nome = $_POST ['nome'];
$endereco = $_POST ['endereco'];
$telefone = $_POST ['telefone'];
$cpf = $_POST ['cpf'];
$quantidade = $_POST ['quantidade'];
$email = $_POST ['email'];
$usuario = $_POST ['usuario'];

// PEGANDO TODOS OS USUÃ�RIOS PARA COMPARAR O quantidade
$url = "http://ec2-52-43-236-116.us-west-2.compute.amazonaws.com:8080/ac/rest/membro/listarTudo";
$ch = curl_init ( $url );
curl_setopt ( $ch, CURLOPT_TIMEOUT, 5 );
curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 5 );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
$data = curl_exec ( $ch );
curl_close ( $ch );
$membro = json_decode ( $data );

foreach ( $membro as $lista ) {
	$cpf2 = $lista->cpf;
	$nome2 = $lista->nome;
	if ($nome2 == $nome) {
		echo "ERRO! Nome jÃ¡ existente.";
		exit ();
	} else if ($cpf2 == $cpf) {
		echo "ERRO! CPF jÃ¡ existente.";
		exit ();
	}
	;
}
;

if (empty ( $id )) {
	$data = array (
			"tipo" => "$tipo",
			"nome" => "$nome",
			"endereco" => "$endereco",
			"telefone" => "$telefone",
			"cpf" => "$cpf",
			"qtdMembros" => "$quantidade",
			"email" => "$email",
			"usuario" => "$usuario" 
	);
} else {
	$data = array (
			"id" => "$id",
			"tipo" => "$tipo",
			"nome" => "$nome",
			"endereco" => "$endereco",
			"telefone" => "$telefone",
			"cpf" => "$cpf",
			"qtdMembros" => "$quantidade",
			"email" => "$email",
			"usuario" => "$usuario" 
	);
}
;

$data_string = json_encode ( $data );

$ch = curl_init ( 'http://ec2-52-43-236-116.us-west-2.compute.amazonaws.com:8080/ac/rest/membro/' );
curl_setopt ( $ch, CURLOPT_CUSTOMREQUEST, "POST" );
curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data_string );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt ( $ch, CURLOPT_HTTPHEADER, array (
		'Content-Type: application/json',
		'Content-Length: ' . strlen ( $data_string ) 
) );
curl_setopt ( $ch, CURLOPT_TIMEOUT, 5 );
curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 5 );

// execute post
$result = curl_exec ( $ch );

if ($result === false) {
	echo "ERRO! Tente novamente";
} else {
	echo "Registro inserido com sucesso!";
}
;

curl_close ( $ch );
?>
