<?php
    //tipos de funciones en PHP
    //funciones que no retornan valor (void)
    declare(strict_types = 1); //da error hay que revisar 
    function sumar(int $numero1 = 0, array $numero2) :void {
        echo $numero1 + $numero2;
    }

    sumar(10, []);

    //funcion que retornan un valor
    /*declare(strict_types = 1);
    function usuarioAutenticado(bool $autenticado) :?string {
        if ($autenticado) {
            return "El usuario esta autenticado";

        } else {
            return null;
        }
    }

    $usuario = usuarioAutenticado(false);
    echo $usuario;*/
?>
