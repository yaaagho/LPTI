<?php

	$nome = $_POST ['titulo'];
	$data = $_POST ['data'];
	$descricao = $_POST ['descricao'];
	$tipo = $_POST ['tipo'];
	$frequencia = $_POST ['frequencia'];
	
	$data = array (
		"nome" => "$nome",
		"tipo" => "$tipo",
		"descricao" => "$descricao",
		"frequencia" => "frequencia",
		"data" => "$data"
	);

	$data_string = json_encode ( $data );

	$ch = curl_init ( 'http://ec2-52-43-236-116.us-west-2.compute.amazonaws.com:8080/ac/rest/evento/' );
	curl_setopt ( $ch, CURLOPT_CUSTOMREQUEST, "POST" );
	curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data_string );
	curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt ( $ch, CURLOPT_HTTPHEADER, array (
		'Content-Type: application/json',
		'Content-Length: ' . strlen ( $data_string ) 
	));
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
