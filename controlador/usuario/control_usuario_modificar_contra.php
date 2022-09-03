<?php
    require '../../modelo/modelo_usuario.php';
    $ruta = "";
    $MU = new Modelo_Usuario();
    $id = htmlspecialchars($_POST['id'],ENT_QUOTES, 'UTF-8');
    $contra_n = password_hash($_POST['contranueva'],PASSWORD_DEFAULT,['cost'=>12]);
    
    $consulta = $MU->Modificar_Contra($id,$contra_n);
    echo json_encode($consulta);
?>