<?php
header('Content-type: application/json');
include_once('./modelos/Usuario.php');
include_once('./config/parametros.php');
$u = new Usuario();
switch($_SERVER["REQUEST_METHOD"]){
    case 'GET':   
        $u = new Usuario();
        $u->obtUsuario();
        break;
    case 'POST':
        $v = file_get_contents('php://input');
        $_POST = json_decode($v, true);
        var_dump($_POST);
        $u = new Usuario();
        $u->inUsuario();
        break;
    case 'PUT':
         echo 'Actualizar usuario';
         $u = new Usuario();
         $u->actUsuario();
           break;
    case 'PATCH':
        echo 'Modificar usuario';
        $u = new Usuario();
        $u->modUsuario();
         break;
    case 'DELETE':
        echo 'Eliminar usuario';
        $u = new Usuario();
        $u->elimUsuario();
        break;
        default:
        $msg = array("msg"=>"Metodo no valido.");
        echo json_encode($msg);
}