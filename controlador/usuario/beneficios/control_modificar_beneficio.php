<?php
    require '../../../modelo/modelo_beneficio.php';
    $MU = new Modelo_Beneficio();
    $texto        = htmlspecialchars($_POST['t'],ENT_QUOTES, 'UTF-8');
    $id_usuario = htmlspecialchars($_POST['iu'],ENT_QUOTES, 'UTF-8');
    $b_id = htmlspecialchars($_POST['id'],ENT_QUOTES, 'UTF-8');
    
    $consulta = $MU->Modificar_Beneficio($texto,$id_usuario,$b_id);
    echo $consulta;
?>