<?php
//Paso 1: conectar a la base de datos
 $db = mysqli_connect('localhost','prueba','prueba','prueba')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
    <title>Guardando cambios</title>
 </head>
 <body>
 <h1>Guardando cambios</h1>

<?php
//Paso 2: construir la consulta con los datos que vienen del formulario
$query = "INSERT INTO datos (nombre, valor) VALUES ('".$_POST["nombre"]."','".$_POST["valor"]."')";
//echo $query;
mysqli_query($db, $query) or die('Error querying database.');

//Paso 3: cerrar conexión a la base de datos
mysqli_close($db);
?>

<p>Se ha guardado la información en la base de datos</p>
<a href="index.html">VOLVER</a>
</body>
</html>