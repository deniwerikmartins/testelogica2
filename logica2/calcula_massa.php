<?php

	$massInitial = floatval($_POST["mass"]);
 
	$seconds = 0;

	$massFinal = $massInitial;

	while ($massFinal >= 0.10) {

		$reduction = $massFinal * 0.25;
		$massFinal = $massFinal - $reduction; 

		$seconds = $seconds + 30;
		
	}

	$hour = $seconds / 3600;

	$minutes = ($seconds % 3600) / 60;
	$minutes = intval($minutes);

	$seconds = ($seconds % 3600) % 60;

	$time = "tempo necessário para redução da massa ser menor que 0.10: $minutes minutos e $seconds segundos";

	header('Content-Type: application/json');
	echo json_encode($time);