<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reservas Restaurante</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./style.css">
    </head>

    <head>
        <title>My First Form </title>
    </head>
    <body>
      <div class="formbox">
      <h1 class="title">Reservas</h1>
            <div class="php">
                <?php
                    $nombre=$_POST["name"];
                    $email=$_POST["email"];
                    $tel=$_POST["tel"];
                    $date=$_POST["date"];
                    $time=$_POST["time"];
                    $comensales=$_POST["comensales"];

                    $genero=$_POST['genero'];

                    if ($genero=="mujer") {
                        $tratamiento=("Sra.");

                    } 
                    else if ($genero=="hombre") {
                        $tratamiento=("Sr.");

                    } else  {
                        $tratamiento=("");
                    };

                    echo("Gracias por su reserva $tratamiento $nombre, se te enviará un email a $email o un mensaje al $tel confirmando tu reserva para el $date a las $time para $comensales comensales. Por favor, no llegue tarde.");	
                ?>
            </div>
      </div>
    </body>
</html>