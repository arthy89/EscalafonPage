<?php
    require '../../../modelo/modelo_formato.php';
    $MU = new Modelo_Formato();
    $titulo     = htmlspecialchars($_POST['t'],ENT_QUOTES, 'UTF-8');
    $texto      = htmlspecialchars($_POST['tx'],ENT_QUOTES, 'UTF-8');
    $tlink      = htmlspecialchars($_POST['tl'],ENT_QUOTES, 'UTF-8');
    $link       = htmlspecialchars($_POST['l'],ENT_QUOTES, 'UTF-8');
    $font_name  = htmlspecialchars($_POST['fn'],ENT_QUOTES, 'UTF-8');
    $font_ico   = htmlspecialchars($_POST['fi'],ENT_QUOTES, 'UTF-8');
    $id_usuario = htmlspecialchars($_POST['iu'],ENT_QUOTES, 'UTF-8');
    
    $consulta = $MU->Registrar_Formato($titulo,$texto,$tlink,$link,$font_name,$font_ico,
    $id_usuario);
    echo $consulta;
?>