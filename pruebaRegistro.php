<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba de Regitro</title>
</head>
<body>
    <form action="resultados.php" method="post">
        <label for="cc">Ingrese la cedula:</label>
        <input type="number" id="cc" name="cc" min="0">
        <br/>
        <br/>
        <label for="nombre">Ingrese su nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <br/>
        <br/>
        <label for="edad">Ingrese su edad</label>
        <input type="number" id="edad" name="edad" min="0">
        <br/>
        <br/>
        <label for="numero">Ingrese numero telefonico</label>
        <input type="number" id="numero" name="numero" min="0">
        <br/>
        <br/>
        <button type="submit">ENVIAR</button>

    </form>
    
</body>
</html>