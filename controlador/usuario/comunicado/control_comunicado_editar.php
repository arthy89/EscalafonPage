<?php
    require '../../../modelo/modelo_comunicado.php';
    $ruta = "";
    $MU = new Modelo_Comunicado();
    $orden     = htmlspecialchars($_POST['ic'],ENT_QUOTES, 'UTF-8');
    $ordenew     = htmlspecialchars($_POST['in'],ENT_QUOTES, 'UTF-8');
    $titulo     = htmlspecialchars($_POST['t'],ENT_QUOTES, 'UTF-8');
    $contenido  = htmlspecialchars($_POST['c'],ENT_QUOTES, 'UTF-8');
    $tlink      = htmlspecialchars($_POST['tl'],ENT_QUOTES, 'UTF-8');
    $link       = htmlspecialchars($_POST['l'],ENT_QUOTES, 'UTF-8');
    $fecha      = htmlspecialchars($_POST['f'],ENT_QUOTES, 'UTF-8');
    $hora       = htmlspecialchars($_POST['h'],ENT_QUOTES, 'UTF-8');
    $font_name  = htmlspecialchars($_POST['fn'],ENT_QUOTES, 'UTF-8');
    $font_ico   = htmlspecialchars($_POST['fi'],ENT_QUOTES, 'UTF-8');
    $id_usuario    = htmlspecialchars($_POST['iu'],ENT_QUOTES, 'UTF-8');
    $estado    = htmlspecialchars($_POST['ie'],ENT_QUOTES, 'UTF-8');
    
    $consulta = $MU->Modificar_Comunicado($orden,$ordenew,$titulo,$contenido,$tlink,$link,$fecha,$hora,$font_name,$font_ico,$id_usuario,$estado);
    echo $consulta;
?>