<?php

include("db/connection.php");

//INICIAMOS LA SESIÓN
session_start();

sleep(2);

// PREGUNTAMOS SI YA SE LOGUEO
if (isset($_SESSION['id_usuario'])) {

    echo json_encode(array(
        'error' => false,
        'id_usuario' => $_SESSION['id_usuario'],
        'Sesion' => true
    ));
} else {
    if (
        isset($_POST['codigo']) &&
        isset($_POST['clave']) &&
        isset($_POST['tipo'])
    ) {

        include_once '../model/Usuario.php';

        $codigo_usuario = $_POST['codigo'];
        $clave_usuario = $_POST['clave'];
        $tipo_usuario = $_POST['tipo'];

        $usuario = new Usuario();

        if ($usuario->userExists($codigo_usuario, $clave_usuario, $tipo_usuario)) {

            //LAMACENA VARIABLES DE SESIÓN
            $_SESSION['id_usuario'] = $usuario->getId();
            $_SESSION['codigo'] = $usuario->getCodigo();
            $_SESSION['clave'] = $clave_usuario;
            $_SESSION['tipo'] = $tipo_usuario;

            echo json_encode(array(
                'error' => false,
                'tipo_usuario' => $tipo_usuario,
                'codigo' => $codigo_usuario,
                'nombre' => $usuario->getNombre()
            ));
        } else {
            // NO EXISTE EL USUARIO
            $informacion_error = "Datos incorrectos";
            $alerta = "error";

            echo json_encode(array('error' => true, 'informacion' => $informacion_error, 'alerta' => $alerta));
        }
    } else {
        // NO HA DIGITADO TODOS LOS CAMPOS
        $informacion_error = "Todos los campos son obligatorios";
        $alerta = "info";

        echo json_encode(array('error' => true, 'informacion' => $informacion_error, 'alerta' => $alerta));
    }
}
