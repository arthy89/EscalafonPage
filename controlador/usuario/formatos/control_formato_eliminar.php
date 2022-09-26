<?php
    require '../../../modelo/modelo_formato.php';
    $MU = new Modelo_Formato();
    $id = htmlspecialchars($_POST['id'],ENT_QUOTES, 'UTF-8');
    
    $consulta = $MU->Eliminar_Formato($id);
    echo ($consulta);
?>