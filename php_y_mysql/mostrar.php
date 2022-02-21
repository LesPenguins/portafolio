<?php
//Paso 1: conectar a la base de datos
 $db = mysqli_connect('localhost','reserva','reserva','datos')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
    <title>Mostrando registro de datos</title>
 </head>
 <body>
 <h1>Historial de datos guardados</h1>

<?php
//Paso 2: construir la consulta de selección y ejecutarla
$query = "SELECT * FROM datos";
echo $query;


//Paso 3: Como la consulta es de recuperación de datos, guardo el resultado en una variable (la llamo $result)
$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_array($result)) {
 echo $row['nombre'] . ' ' . $row['valor'] . '<br />';
}

//Paso 4: cerrar conexión a la base de datos
mysqli_close($db);
?>

<p>Se ha mostrado la información de la base de datos</p>
<a href="index.html">VOLVER</a>
</body>
</html>