<?php
    require '../../../modelo/modelo_comunicado.php';
    $MU = new Modelo_Comunicado();
    $consulta = $MU->listar_estado();
        echo json_encode($consulta);

?>