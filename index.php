<?php
    // declarar una variable numerica
    //$edad = 25;

    //declarar una variable de texto
    //$nombre = "Juan";

    //declarar una variable booleana
    //$es_valido = true;
    //echo var_dump($nombre);
    //echo "<br/>";
    //echo "Text a imprimir";
    //echo "<br/>";
    //$texto = "Mundo";
    //printf("hola %s", $texto);

    //ciclo while
    //$numero = 1;
    /*while ($numero <= 10) {
        echo $numero;
        $numero = $numero + 1;
    }*/

    // ciclo do while
    /*do {
        echo $numero;
        $numero ++;
    } while ($numero <= 8);*/

    //ciclo for
    /*for ($numero = 0; $numero <= 10 ; $numero ++) { 
        echo $numero;
    }*/

    //Arrays
    /*$dias = array('lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo');
    print_r($dias);*/

    // array asociativos 
    $estudiante = array(
        'nombre' => 'victor',
        'apellido' => 'cruz',
        'edad' => 23
    );
    //print_r($estudiante);
    /*echo "mi nombre es: " .$estudiante['nombre'];
    echo "<br/>";
    echo "mi apellido es: " .$estudiante['apellido'];
    echo "<br/>";
    echo "mi edad es: " .$estudiante['edad'];*/

    /*$cursos = array('python', 'java', 'php', 'html', 'css');
    $cursos[5] = 'javaScript';
    print_r($cursos);
    echo "<br/>";
    echo count($cursos);*/

    /*$semana[0] = 'lunes';
    $semana[1] = 'martes';
    $semana[2] = 'miercoles';
    $semana[3] = 'jueves';
    $semana[4] = 'viernes';
    $semana[5] = 'sabado';
    $semana[6] = 'domingo';

    print_r($semana);
    echo "<br/>";   

    for ($op = 0; $op < count($semana); $op ++ ) {
        //echo $semana[$op];
        //echo "<br/>";
        if ($semana[$op] == 'viernes') {
            echo "se hacerca el fin de senama";
        }
    }*/

    /*$amigos = array('jose', 'maria', 'raul', 'sara', 'pedro', 'camila', 'luis');
    asort($amigos); // ordenar alfabeticamente
    print_r($amigos);
    echo "<br/>";
    rsort($amigos); // ordenar al revez sentido contrario
    print_r($amigos);*/

    $nombreCliente = "Campers Campuslands";
    echo strlen($nombreCliente); // conocer la extencion de string
    echo "<br/>";
    
    //eliminar espacios en blanco
    $texto = trim($nombreCliente);
    echo $texto; 

    echo "<br/>";
    $mayuscula = strtoupper($nombreCliente);
    echo $mayuscula;

    echo "<br/>";
    $minuscula = strtolower($nombreCliente);
    echo $minuscula;

    $email1 = "correo@correo.com";
    $email2 = "correo@correo.com";

    echo "<br/>";
    var_dump(strtolower($email1) === strtolower($email2));

    echo "<br/>";
    echo strpos($nombreCliente, 'pedro');

    echo "<br/>";
    $tipoCliente = "Premiun - Empresarial";
    echo "El cliente  $nombreCliente  es $tipoCliente";
    echo "<br/>";
    echo "El cliente " .$nombreCliente . " es " .$tipoCliente;
    echo "<br/>";
    echo "El cliente ${nombreCliente} es ${tipoCliente}";
    echo "<br/>";
    
    //arrays
    $carrito = ['Tablet', 'Televisor', 'Computador'];
    //util para ver los contenidos de un array
    echo "<pre>";
    print_r($carrito);
    echo "</pre>";

    //acceder a un elemnto de un array 
    echo $carrito[0];

    echo "<br/>";
    //añador un nuevo producto
    $carrito[3] = 'Celular';
    echo "<pre>";
    print_r($carrito);
    echo "</pre>";

    //añadir un elemento al final del array
    array_push($carrito, 'Audifonos');
    echo "<pre>";
    print_r($carrito);
    echo "</pre>";

    //añadir un nuevo elemento al inicio del array
    array_unshift($carrito, 'Smartwatch');
    echo "<pre>";
    print_r($carrito);
    echo "</pre>";

    echo "<h1>";
    echo "este es un mensaje echo con PHP";
    echo "</h1>";
    
    //Estrae el ultimo elemento del array
    print_r(array_pop($carrito));

    //para combinar mas de dos array en uno solo
    $otroCarrito = ['Baterias', 'Forro', 'Linterna', 'Bombillo'];
    $nuevoCarrito = array_merge($carrito, $otroCarrito);
    echo "<pre>";
    print_r($nuevoCarrito);
    echo "</pre>";

    //para comprobar si una llave existe dentro del arreglo
    print_r(array_key_exists('7', $nuevoCarrito));
    echo "<br/>";
    //devuelve un 1 si la llave exixte.
    //no devuelve nada si no existe.
    
    //arrays asociativos 
    $miArrayAsociativo = array(
        'clave1' => 'valor1',
        'clave2' => 'valor2',
        'clave3' => 'valor3'
    );

    echo $miArrayAsociativo['clave1'];
    echo "<br/>";
    echo $miArrayAsociativo['clave2'];
    echo "<br/>";
    echo $miArrayAsociativo['clave3'];
    echo "<br/>";

    //para recorrer un array asociativo
    foreach ($miArrayAsociativo as $clave => $valor) {
        echo "clave: " .$clave . ", valor: " .$valor;
        echo "<br/>";
    }

    //otra forma de escribir un array asociativo
    $cliente = [
        'nombre' => 'Juan',
        'saldo' => 200,
        'informacion' => [
            'tipo' => 'premiun',
            'disponible' => 100
        ]
    ];

    // imprimir el arreglo
    echo "<pre>";
    print_r($cliente);
    echo "</pre>";

    echo $cliente['nombre'];
    echo "<br/>";

    echo $cliente['informacion']['disponible'];

    //ingrsamos un nuevo dato al array asociativo 
    $cliente['codigo'] = 123456;

    // imprimir el arreglo
    echo "<pre>";
    print_r($cliente);
    echo "</pre>";
    
    //para buscar un elemento dentro de un arreglo sencillo
    $carritos = ['tablet', 'computadora', 'televisor'];

    print_r(in_array('tablet', $carritos)); // 1 si es verdadero 
    echo "<br/>";
    print_r(in_array('audifonos', $carritos)); // nulo si no esta

    echo "<br/>";
    //ordenar elementos de un array 
    $numeros = array(1, 2, 6, 3, 7, 4, 5);

    sort($numeros);//odenar de menor a mayor
    echo "<pre>";
    print_r($numeros);
    echo "</pre>";

    rsort($numeros); // ordenar de mayor a menor
    echo "<pre>";
    print_r($numeros);
    echo "</pre>";

    // Ordenar arreglos asociativos
    $clientes = array(
        'saldo' => 200,
        'tipo' => 'premiun',
        'nombre' => 'Juan'
    );

    echo "<pre>";
    print_r($clientes);
    echo "</pre>";

    asort($clientes); // ordena por valores (orden alfabetico)
    echo "<pre>";
    print_r($clientes);
    echo "</pre>";

    arsort($clientes); // ordena por valores (de la Z a la A)
    echo "<pre>";
    print_r($clientes);
    echo "</pre>";

    ksort($clientes); // ordena por llaves (orden alfabetico)
    echo "<pre>";
    print_r($clientes);
    echo "</pre>";

    krsort($clientes); // ordena por llaves (de la Z a la A)
    echo "<pre>";
    print_r($clientes);
    echo "</pre>";

?>