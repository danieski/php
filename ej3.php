<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <title>Ejercicio 3</title>
</head>
<body>

<?php






	
echo "
    <form action='{$_SERVER['PHP_SELF']}' method='post'>
        Numero1:  <input type='text' name='n1' value='0'/><br>
        Numero2:  <input type='text' name='n2' value='0' /><br>
        <input type='submit' value='Suma'       name='op' />
        <input type='submit' value='Diferencia' name='op' />
    </form>
" ;
$nn1=$_POST["n1"];
$nn2=$_POST["n2"];
if (!isset($_POST["op"])) {
	exit();
}
if ($_POST["op"] == "Suma") {
echo "La suma de ", $nn1, " y ", $nn2, " es: ", $nn1+$nn2;
}
echo nl2br("\n");
if ($_POST["op"] == "Diferencia") {
echo "La resta de ", $nn1, " y ", $nn2, " es: ", $nn1-$nn2;
}




?>

</body>
</html> 

