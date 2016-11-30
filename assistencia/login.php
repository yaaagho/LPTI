<?php

	session_start();

	$login = isset($_POST['login']) ? $_POST['login'] : null;
	$senha = isset($_POST['senha']) ? $_POST['senha'] : null;

	$ch = curl_init();
	$dados = array('login'=>$login, 'senha'=>$senha);

	curl_setopt($ch, CURLOPT_URL, 'http://ec2-52-43-236-116.us-west-2.compute.amazonaws.com:8080');
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);

	$resultado = curl_exec($ch);
	
	if($resultado){
		$_SESSION['login'] = $login;
		header('location:telaPrincipal.html');
	}
	else{
		unset($_SESSION['login']);
		header('location:index.html');
	}

	/*if ($stmt->rowCount() > 0) {
	//$_SESSION['login'] = $login;
		$_SESSION['email'] = $email;

		header('location:../index.html');
	}
	else{
		//unset ($_SESSION['login']);
		unset($_SESSION['email']);

		header('location:../filosofia.html');
	}*/
	
?>
