<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <title>Ejercicio 2</title>
    <style>
		div {float:left; padding: 20px}
	</style>
</head>
<body>

<?php

	function tablaMultiplicarDel($nu)
	
	{

		$html = "<div><h3>TABLA DEL: $nu</h3>";
		echo "<table border=1>";
		echo "<tr>  <td>" . $nu . "</td> <td>" . 0 ."</td> <td>" . $nu*0 ."</td> </tr>" ;
		echo "<tr>  <td>" . $nu . "</td> <td>" . 1 ."</td> <td>" . $nu*1 ."</td> </tr>" ;
		echo "<tr>  <td>" . $nu . "</td> <td>" . 2 ."</td> <td>" . $nu*2 ."</td> </tr>" ;
		echo "<tr>  <td>" . $nu . "</td> <td>" . 3 ."</td> <td>" . $nu*3 ."</td> </tr>" ;
		echo "<tr>  <td>" . $nu . "</td> <td>" . 4 ."</td> <td>" . $nu*4 ."</td> </tr>" ;
		echo "<tr>  <td>" . $nu . "</td> <td>" . 0 ."</td> <td>" . $nu*5 ."</td> </tr>" ;
		echo "<tr>  <td>" . $nu . "</td> <td>" . 1 ."</td> <td>" . $nu*6 ."</td> </tr>" ;
		echo "<tr>  <td>" . $nu . "</td> <td>" . 2 ."</td> <td>" . $nu*7 ."</td> </tr>" ;
		echo "<tr>  <td>" . $nu . "</td> <td>" . 3 ."</td> <td>" . $nu*8 ."</td> </tr>" ;
		echo "<tr>  <td>" . $nu . "</td> <td>" . 4 ."</td> <td>" . $nu*9 ."</td> </tr>" ;
		echo "<tr>  <td>" . $nu . "</td> <td>" . 4 ."</td> <td>" . $nu*10 ."</td> </tr>" ;
		echo "</table>";


        $html .= '</div>';
		return $html;
		
	}

$listaNumeros = [31, 42, 12, 17, 21];


echo tablaMultiplicarDel($listaNumeros[0]);
echo nl2br("\n\n\n\n\n\n\n");
echo tablaMultiplicarDel($listaNumeros[1]);
echo nl2br("\n\n\n\n\n\n\n");
echo tablaMultiplicarDel($listaNumeros[2]);
echo nl2br("\n\n\n\n\n\n\n");
echo tablaMultiplicarDel($listaNumeros[3]);
echo nl2br("\n\n\n\n\n\n\n");
echo tablaMultiplicarDel($listaNumeros[4]);




	
    //$listaNumeros = [31, 42, 12, 17, 21];


?>

</body>
</html>


