<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <title>Ejercicio 1</title>
</head>
<body>


 


    <form action="/respuesta.php" method="POST">
        Nombre:  <input type="text" name="nombre" /><br />
        Email:   <input type="text" name="email"  /><br />
        Cerveza preferida: <br />
        <select name="cerveza">
            <option name="cerveza" value="ninguna">No me gusta la cerveza</option>
            <option name="cerveza" value="alhambra" selected="true">Alhambra</option>
            <option name="cerveza" value="estralla galicia">Estrella de Galicia</option>
            <option  name="cerveza" value="sanmiguel">San Miguel</option>
            <option name="cerveza" value="coronita">Coronita</option>
        </select>
        <input type="submit" value="Enviar" name="enviar" />
    </form>


</body>
</html> 

