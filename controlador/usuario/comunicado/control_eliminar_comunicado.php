<?php
    require '../../../modelo/modelo_comunicado.php';
    $ruta = "";
    $MU = new Modelo_Comunicado();
    $id = htmlspecialchars($_POST['id'],ENT_QUOTES, 'UTF-8');
    
    $consulta = $MU->Eliminar_Comunicado($id);
    echo ($consulta);
?>