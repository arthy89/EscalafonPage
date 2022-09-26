<?php
    require '../../../modelo/modelo_beneficio.php';
    $MU = new Modelo_Beneficio();
    $id = htmlspecialchars($_POST['id'],ENT_QUOTES, 'UTF-8');
    $consulta = $MU->Eliminar_Bene($id);
    echo ($consulta);
?>