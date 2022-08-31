<?php

    $idusuario = htmlspecialchars($_POST['idusuario'],ENT_QUOTES, 'UTF-8');
    $eusuario = htmlspecialchars($_POST['eusuario'],ENT_QUOTES, 'UTF-8');
    $usuario = htmlspecialchars($_POST['usuario'],ENT_QUOTES, 'UTF-8');
    $apusuario = htmlspecialchars($_POST['apusuario'],ENT_QUOTES, 'UTF-8');
    $amusuario = htmlspecialchars($_POST['amusuario'],ENT_QUOTES, 'UTF-8');
    $dusuario = htmlspecialchars($_POST['dusuario'],ENT_QUOTES, 'UTF-8');
    $fusuario = htmlspecialchars($_POST['fusuario'],ENT_QUOTES, 'UTF-8');
    $detalleusu = htmlspecialchars($_POST['detalleusu'],ENT_QUOTES, 'UTF-8');
    $rol = htmlspecialchars($_POST['rol'],ENT_QUOTES, 'UTF-8');
    $ulog = htmlspecialchars($_POST['ulog'],ENT_QUOTES, 'UTF-8');

    session_start();
    $_SESSION['S_IDUSUARIO'] = $idusuario;
    $_SESSION['S_EUSUARIO'] = $eusuario;
    $_SESSION['S_USUARIO'] = $usuario;
    $_SESSION['S_APUSUARIO'] = $apusuario;
    $_SESSION['S_AMUSUARIO'] = $amusuario;
    $_SESSION['S_DUSUARIO'] = $dusuario;    
    $_SESSION['S_FUSUARIO'] = $fusuario;
    $_SESSION['S_DETALLEUSU'] = $detalleusu;
    $_SESSION['S_ROL'] = $rol;    
    $_SESSION['S_ULOG'] = $ulog;    
?>