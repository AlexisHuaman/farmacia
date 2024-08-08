<?php
include_once '../modelo/usuario.php';
    session_start();

    if(!empty($_SESSION['tipo_usuario'])){
        switch($_SESSION['tipo_usuario']){
            case 1:
                header('location: ../vista/admin_catalogo.php');
                break;
            case 2:
                header('location: ../vista/tecnico_catalogo.php');
                break;
        }
    }
    else{
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $usuario = new usuario();

        $usuario->logearse($user,$pass);
        if(!empty($usuario->objetos)){
            foreach($usuario->objetos as $objeto){
                $_SESSION['usuario']=$objeto->id_usuario;
                $_SESSION['tipo_usuario']=$objeto->prod_tipo_usuario;
                $_SESSION['nombre_usuario']=$objeto->nombre;
            }
            switch($_SESSION['tipo_usuario']){
                case 1:
                    header('location: ../vista/admin_catalogo.php');
                    break;
                case 2:
                    header('location: ../vista/tecnico_catalogo.php');
                    break;
            }
        }
        else{
            header('location: ../index.php');
        }
    }
?>