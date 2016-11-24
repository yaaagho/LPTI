<?php 
	
	$month = $_GET['month'];
	$year = $_GET['year'];
	$num_days = $_GET['num_days'];
	$all_events = "[";
	
	/*echo '[{
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
		}]';*/
	
	// PEGANDO TODOS OS EVENTOS DO MÊS
	$url = 'http://ec2-52-43-236-116.us-west-2.compute.amazonaws.com:8080/ac/rest/evento/procurarData/';
	
	for ($i=1 ; $i<=$num_days ; $i++){
		$ch = curl_init ( $url . $i . '-' . $month . '-' . $year);
		curl_setopt( $ch, CURLOPT_TIMEOUT, 5 );
		curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 5 );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		$data = curl_exec( $ch );
		curl_close( $ch );
		
		if (!$data == NULL or !$data == ''){
			
			$all_events = $all_events . ',' . $data;
		}
	}
	
	echo json_encode(($all_events . ']'), JSON_PRETTY_PRINT);
?>
