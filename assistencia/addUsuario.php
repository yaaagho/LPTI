<?php

	 // PEGANDO OS DADOS DO FORMULÁRIO
	 $tipo = $_POST['tipo'];
	 $nome = $_POST['nome'];
	 $endereco = $_POST['endereco'];
	 $telefone = $_POST['telefone'];
	 $cpf = $_POST['cpf'];
	 $login = $_POST['login'];
     $email = $_POST['email'];
	 $senha = $_POST['senha'];

	//PEGANDO TODOS OS USUÁRIOS PARA COMPARAR O LOGIN
	$url = "http://ec2-52-43-236-116.us-west-2.compute.amazonaws.com:8080/ac/rest/usuario/listarTudo";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($ch);
	curl_close($ch);
	$usr = json_decode($data);

	foreach($usr as $lista) {
		$cpf2 = $lista->cpf;
		$login2 = $lista->login;
		$email2 = $lista->email;
		if ($login2 == $login) {
			echo "ERRO! Login já existente.";
			exit;
		} else if ($cpf2 == $cpf) {
			echo "ERRO! CPF já existente.";
			exit;
		} else if ($email2 == $email) {
			echo "ERRO! E-mail já existente.";
			exit;
		};
	};		


if(empty($id))
	{
		$data = array("tipo" => "$tipo", "nome" => "$nome", "endereco" => "$endereco", "telefone" => "$telefone", "cpf" => "$cpf", "login" => "$login", "email" => "$email", "senha" => "$senha");
	} else {
		$data = array("id" => "$id", "tipo" => "$tipo", "nome" => "$nome", "endereco" => "$endereco", "telefone" => "$telefone", "cpf" => "$cpf", "login" => "$login", "email" => "$email", "senha" => "$senha");
};

$data_string = json_encode($data);

$ch = curl_init('http://ec2-52-43-236-116.us-west-2.compute.amazonaws.com:8080/ac/rest/usuario/');
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
	echo "ERRO! Tente novamente.";
} else {
	echo "Registro inserido com sucesso!";
};
	
curl_close($ch);
?>
