<!DOCTYPE html>
<html>
<head>
	<title>RESPUESTA</title>
</head>
<body>	
	<?php

	$nom = $_GET['nombre'];
	$ed = $_GET['edad'];
	$proc = $_GET['procedencia'];
	$des = $_GET['lugares'];
	
	echo "<h1>BIENVENID@ ",$nom, " tu edad es de ",$ed, " años, originari@ de ",$proc,".</h1>";
	echo "<h2>Tu destino turistico es: ",$des,"<br>";	

	if ($des=="Cancun") {
		echo "<img src='Imagenes/cancun.jpg'>";
	}else if ($des=="Tijuana") {
		echo "<img src='Imagenes/tijuana.jpg'>";
	}else if ($des=="San Luis Potosí") {
		echo "<img src='Imagenes/SLP.jpg'>";
	}else if ($des=="Queretaro") {
		echo "<img src='Imagenes/queretaro.jpg'>";
	}else if ($des=="Monterrey") {
		echo "<img src='Imagenes/monterrey.jpg'>";
	}else if ($des=="CDMX") {
		echo "<img src='Imagenes/cdmx.png'>";
	}else if ($des=="Toluca") {
		echo "<img src='Imagenes/toluca.jpg'>";
	}else if ($des=="EEUU") {
		echo "<img src='Imagenes/eeuu.jpg'>";
	}else if ($des=="Roma") {
		echo "<img src='Imagenes/roma.jpg'>";
	}else if ($des=="Tokio") {
		echo "<img src='Imagenes/tokio.jpeg'>";
	}

	echo "<h1> FELIZ VIAJE!!</h1>";

	?>
	

</body>
</html>