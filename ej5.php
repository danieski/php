<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <title>Ejercicio 5</title>
</head>
<body>
<?php

	require "class/asir2database_class.php" ;
	require "class/generaHTML_class.php" ;
 


	





?>

	<h2>Consulta a la tabla de productos</h2>

	<form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="POST" >

		Productos de la categoria: 
<select>

	<option>Bebidas </option>
	<option>Condimentos</option>
	<option>Reposteria</option>
	<option>Lacteos </option>
	<option>Granos</option>
	<option>Carnes</option>
	<option>Frutas-Verduras </option>
	<option>Pescado-Marisco</option>
	

</select>
		

		En orden: 
<select>

	<option>ASC </option>
	<option>DESC</option>

</select>


		Del campo: 
<select>

	<option>Id</option>
	<option>Categoria</option>

</select>

		<input type="submit" value="Enviar" name="enviar" />

	</form>
	
<?php
	
	
	mysql_db_query(string lamp_db, string 'SELECT id FROM categoria'): resource


	echo "<h3>Productos de la categoría: ???? ordenados por: ???? en orden: ????</h3>" ;



?>
</body>
</html>

