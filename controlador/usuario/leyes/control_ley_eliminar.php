<?php
    require '../../../modelo/modelo_ley.php';
    $MU = new Modelo_Ley();
    $id = htmlspecialchars($_POST['id'],ENT_QUOTES, 'UTF-8');
    $consulta = $MU->Eliminar_Ley($id);
    echo ($consulta);
?>