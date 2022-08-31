<?php
    require '../../modelo/modelo_usuario.php';
    $ruta = "";
    $MU = new Modelo_Usuario();
    $id = htmlspecialchars($_POST['id'],ENT_QUOTES, 'UTF-8');
    $usuario = htmlspecialchars($_POST['usuario'],ENT_QUOTES, 'UTF-8');
    $apaterno = htmlspecialchars($_POST['apaterno'],ENT_QUOTES, 'UTF-8');
    $amaterno = htmlspecialchars($_POST['amaterno'],ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'],ENT_QUOTES, 'UTF-8');
    $detalle = htmlspecialchars($_POST['detalle'],ENT_QUOTES, 'UTF-8');
    $direccion = htmlspecialchars($_POST['direccion'],ENT_QUOTES, 'UTF-8');
    $rol = htmlspecialchars($_POST['rol'],ENT_QUOTES, 'UTF-8');

    $consulta = $MU->ModificarUsuario($id,$usuario,$apaterno,$amaterno,$email,$detalle,$direccion,$rol);
    echo $consulta;
?>