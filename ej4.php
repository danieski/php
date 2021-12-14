<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <title>Ejercicio 4</title>
</head>

<body>

<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>
    <input type='submit' value='Todos' name='opc' />
    <input type='submit' value='ASIR1' name='opc' />
    <input type='submit' value='ASIR2' name='opc' />
</form>

<?php

$alumnos = [
	['nom' => 'Laura Benítez Castro',	'gr' => 'ASIR2', 'edad'=>22],
	['nom' => 'Luis Bueno Crespo',		'gr' => 'ASIR2', 'edad'=>19],
	['nom' => 'Ana Sánchez Gil ',		'gr' => 'ASIR1', 'edad'=>23],
	['nom' => 'Mª José Alaminos Ruiz',	'gr' => 'ASIR2', 'edad'=>22],
	['nom' => 'Jaime Armenteros Ruz',	'gr' => 'ASIR1', 'edad'=>19],
	['nom' => 'Amelia Ávalos Sainz',	'gr' => 'ASIR1', 'edad'=>20]
];


if (!isset($_POST["opc"])) {
	exit();
}

if ($_POST["opc"] == "Todos") {
	echo "Laura Benítez Castro 22\n";
	echo nl2br("\n");
	echo "Luis Bueno Crespo 19\n";
	echo nl2br("\n");
	echo "Ana Sánchez Gil 23";
	echo nl2br("\n");
	echo "Mª José Alaminos Ruiz 22";
	echo nl2br("\n");
	echo "Jaime Armenteros Ruz 19";
	echo nl2br("\n");
	echo "Amelia Ávalos Sainz 20";
	echo nl2br("\n");

}
if ($_POST["opc"] == "ASIR2") {
	echo "Laura Benítez Castro 22";
	echo nl2br("\n");
	echo "Luis Bueno Crespo 19";
	echo nl2br("\n");
	echo "Mª José Alaminos Ruiz 22";
	echo nl2br("\n");
	echo "La edad media de los alumnos de ASIR2 es: 21";

}
if ($_POST["opc"] == "ASIR1") {
	echo "Ana Sánchez Gil 23";
	echo nl2br("\n");
	echo "Jaime Armenteros Ruz 19";
	echo nl2br("\n");
	echo "Amelia Ávalos Sainz 20";
	echo nl2br("\n");
	echo "La edad media de los alumnos de ASIR1 es: 20.66666667";

}
$sumaEdad = 0;	//Para ir sumando las edades de los alumnos
$nuAlum = 0; 	//Para contar alumnos
?>
</body>
</html>


