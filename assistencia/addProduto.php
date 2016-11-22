<?php

	 // PEGANDO OS DADOS DO FORMULÁRIO
	 $nome = $_POST['nomeProduto'];

	//PEGANDO O NOME DOS PRODUTOS PARA LISTAGEM
	$url = "http://ec2-52-43-236-116.us-west-2.compute.amazonaws.com:8080/ac/rest/produto/listarTudo";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($ch);
	curl_close($ch);
	$prodt = json_decode($data);
	

	foreach($prodt as $lista) {
		if ($lista->nome == $nome) {
			echo "ERRO! Produto já existente.";
			exit;
		}
	};		
	
if(empty($id))
	{
		$data = array("quantidade" => "0", "nome" => "$nome");
	} else {
		$data = array("id" => "$id", "quantidade" => "$quantidade", "nome" => "$nome");
};

$data_string = json_encode($data);

$ch = curl_init('http://ec2-52-43-236-116.us-west-2.compute.amazonaws.com:8080/ac/rest/produto/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

//execute post
$result = curl_exec($ch);

if ($result === false) {
	echo "'ERRO!";
} else {
	echo "Registro inserido com sucesso!";
};
	
curl_close($ch);
?>
