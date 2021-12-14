<?php
	$con = new mysqli('localhost', 'root', '', 'proyecto');
	$datos = $con->query("SELECT * FROM equipos");
?>

<table>
	<thead>
		<th>id</th>
		<th>nombre</th>
	</thead>
	<tbody>
		<?php while($user = mysqli_fetch_array($datos)){ ?>
		 <tr>
		   <td><?php echo $user['id']; ?> </td>
		   <td><?php echo $user['nombre']; ?> <a class='btn btn-floating btn-tiny cyan' href='$url?ac=modificar&id=XXX'><i class='material-icons'>Listar</i></a></td>
		 </tr>
	    <?php } ?>
	</tbody>
</table>
