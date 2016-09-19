<?php

# An HTTP GET request example

$url = 'http://localhost:8080/restmongo/rest/produto/listarTudo';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
$var = json_decode($data);
foreach ($var as $saida){
	echo $saida->nome;
};

?>
