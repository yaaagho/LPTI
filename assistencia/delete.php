<?php
$id = isset ( $_GET ['id'] ) ? $_GET ['id'] : null;
$ch = curl_init ();
curl_setopt ( $ch, CURLOPT_URL, "http://ec2-52-43-236-116.us-west-2.compute.amazonaws.com:8080/ac/rest/$id" );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt ( $ch, CURLOPT_CUSTOMREQUEST, "DELETE" );
$result = curl_exec ( $ch );

if ($result === false) {
	echo "ERRO!";
} else {
	echo "Registro deletado com sucesso!";
}
;

curl_close ( $ch );
?>
