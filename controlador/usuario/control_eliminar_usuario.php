<?php
    require '../../modelo/modelo_usuario.php';
    $ruta = "";
    $MU = new Modelo_Usuario();
    $id = htmlspecialchars($_POST['id'],ENT_QUOTES, 'UTF-8');
    
    $consulta = $MU->Eliminar_Usuario($id);
    echo json_encode($consulta);
?>