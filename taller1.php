<?php
	
	echo "Taller 1 parte 2:<br><br>";

	$num1 = -10;

	//PUNTO A:**********************************************************
	if($num1 < 0) {
		echo "a. El numero evaluado es negativo.<br><br>";
	}else {
		echo "a. El numero evaluado no es negativo.<br><br>";
	}

	//PUNTO B:**********************************************************
	$var = true;

	if($var) {
		echo "b. Verdadero.<br><br>";
	}else {
		echo "b. Falso.<br><br>";
	}

	//PUNTO C:**********************************************************
	$valor = 4;
	$primo = 0;
	 
	for ($b = 1; $b < $valor; $b++) {
	    if ($valor % $b == 0) {
	        $primo++;
	    }
	}
	 
	if ($primo >= 2) {
	    echo "c. El numero ".$valor." no es primo.<br><br>";
	} else {
	    echo "c. El numero ".$valor." es primo.<br><br>";
	}

	//PUNTO D:**********************************************************
	$num2 = 50;

	if($num2 > 35) {
		echo "d. ".$num2." es mayor que 35.<br><br>";
	}else {
		echo "d. ".$num2." es menor que 35.<br><br>";
	}

	//PUNTO E:**********************************************************
	$num3 = 80;

	if($num3 >= 0 && $num3 < 100) {
		echo "e. ".$num3." es positivo y menor que 100.<br><br>";
	}else {
		echo "e. ".$num3." es negativo y menor que 100.<br><br>";
	}

	//PUNTO F:**********************************************************
	$num4 = 28;

	if($num4 >= -3 && $num4 <= 27) {
		echo "f. ".$num4." pertenece al intervalo -3, 27.<br><br>";
	}else {
		echo "f. ".$num4." no pertenece al intervalo -3, 27.<br><br>";
	}

	//PUNTO G:**********************************************************
	$num5 = 51;

	if($num5 >= 25 && $num5 <= 50) {
		echo "g. ".$num5." pertenece al intervalo 25, 50.<br><br>";
	}else {
		echo "g. ".$num5." no pertenece al intervalo 25, 50.<br><br>";
	}

	//PUNTO H:**********************************************************
	$num6 = 10;

	if($num6 % 1 < 15) {
		echo "h. El modulo de ".$num6." es menor que 15.<br><br>";
	}else {
		echo "h. El modulo de ".$num6." es mayor que 15.<br><br>";
	}

	//PUNTO I:**********************************************************
	$num7 = 3;

	if($num7 % 2 == 0) {
		echo "i. ".$num7." no es un numero impar.<br><br>";
	}else {
		echo "i. ".$num7." es un numero impar.<br><br>";
	}

	//PUNTO J:**********************************************************
	$num8 = 3;
	$resultado;

	if($num8 % 2 == 0) {
		$resultado = $num8 ** 2;
		echo "j. El resultado de elevar ".$num8." al cuadrado es ".$resultado.".<br><br>";
	}else {
		$resultado = $num8 ** 3;
		echo "j. El resultado de elevar ".$num8." al cubo es ".$resultado.".<br><br>";
	}

	//PUNTO K:**********************************************************
	$num9 = 100;
	$num10 = 20;

	if($num9 < $num10) {
		echo "k. El maximo entre ".$num9." y ".$num10." es ".$num10.".<br><br>";
	}else {
		echo "k. El maximo entre ".$num9." y ".$num10." es ".$num9.".<br><br>";
	}

	//PUNTO L:**********************************************************
	$num11 = 10;
	$num12 = 50;
	$num13 = 40;

	if($num11 < $num12 && $num12 > $num13) {
		echo "l. El maximo entre ".$num11.", ".$num12." y ".$num13." es ".$num12.".<br><br>";
	}else if($num11 > $num12 && $num11 > $num13) {
		echo "l. El maximo entre ".$num11.", ".$num12." y ".$num13." es ".$num11.".<br><br>";
	}else if($num11 < $num12 && $num12 < $num13) {
		echo "l. El maximo entre ".$num11.", ".$num12." y ".$num13." es ".$num13.".<br><br>";
	}

	//PUNTO M:**********************************************************
	$num14 = 12;
	$num15 = 30;

	if($num14 < $num15) {
		echo "m. Orden de menor a mayor ".$num14.", ".$num15.".<br><br>";
	}else {
		echo "m. Orden de menor a mayor ".$num15.", ".$num14.".<br><br>";
	}

	//PUNTO N:**********************************************************
	$num16 = 1120;
	$num17 = 1550;
	$num18 = 11110;

	if($num16 > $num17 && $num17 > $num18) {
		echo "n. Orden de mayor a menor ".$num16.", ".$num17.", ".$num18.".<br><br>";
	}else if($num16 < $num17 && $num17 < $num18) {
		echo "n. Orden de mayor a menor ".$num18.", ".$num17.", ".$num16.".<br><br>";
	}else if($num16 < $num17 && $num18 < $num16) {
		echo "n. Orden de mayor a menor ".$num17.", ".$num16.", ".$num18.".<br><br>";
	}else if($num16 < $num17 && $num18 > $num16) {
		echo "n. Orden de mayor a menor ".$num17.", ".$num18.", ".$num16.".<br><br>";
	}else if($num16 > $num18 && $num18 > $num17) {
		echo "n. Orden de mayor a menor ".$num16.", ".$num18.", ".$num17.".<br><br>";
	}else if($num16 < $num18 && $num16 > $num17) {
		echo "n. Orden de mayor a menor ".$num18.", ".$num16.", ".$num17.".<br><br>";
	}

	//PUNTO O:**********************************************************
	//strlen($cadena) determina el numero de caracteres que componen una cadena de texto
	$cadena = "Hola";
	
	if(strlen($cadena) > 5) {
		echo "o. La longitud de la cadena es de ".strlen($cadena)." caracteres y el texto es largo.<br><br>";
	}else {
		echo "o. La longitud de la cadena es de ".strlen($cadena)." caracteres y el texto es corto.<br><br>";
	}

	//PUNTO P:**********************************************************
	//isset($miVariable) determina si la variable contenida como parametro existe y no es null
	if(isset($miVariable)) {
		echo "p. La variable existe.<br><br>";
	}else {
		echo "p. La variable no existe.<br><br>";
	}

	//PUNTO Q:**********************************************************
	//empty($variable) determina si la variabla contenida como parametro contiene informacion
	$variable;

	if(empty($variable)) {
		echo "q. La variable se encuentra vacia.<br><br>";
	}else {
		echo "q. La variable contiene informacion.<br><br>";
	}
?>















