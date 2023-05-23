<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo Php</title>
</head>
<body>
    <main>
        <?php
            $cc = isset($_POST["cc"]) ? $_POST["cc"] : "";
            $Nombre = isset($_POST["nombre"]) ?  $_POST["nombre"] : "";
            $Email = isset($_POST["email"]) ? $_POST["email"] : "";
            $Movil = isset($_POST["movil"]) ?  $_POST["movil"] : "";
        ?>

        <h1>gracias por su registro</h1>
        <h2>Los datos ingresados fueron</h2>

        <?php

            echo "Cedula Ciudadnia: $cc"; 
            echo "<br/>";
            echo "Nombre: $Nombre";
            echo "<br/>";
            echo " Email: $Email";
            echo "<br/>";
            echo "Movil: $Movil";
        ?>

    </main>
    
</body>
</html>