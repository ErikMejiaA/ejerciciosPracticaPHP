<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ver datos</title>
</head>
<body>
    <?php

        $CC =  $_POST["cc"];
        $Nombre = $_POST["nombre"];
        $Edad = $_POST["edad"];
        $Telefono = $_POST["numero"];
        
    ?>

    <h1>Los datos registrados por el usuario son: </h1>

    <?php
        echo "Numero de Cedula: $CC";
        echo "<br/>";
        echo "<br/>";
        echo "Nombre: $Nombre";
        echo "<br/>";
        echo "<br/>";
        echo "Edad: $Edad";
        echo "<br/>";
        echo "<br/>";
        echo "Telefono: $Telefono";
    ?>
    
</body>
</html>