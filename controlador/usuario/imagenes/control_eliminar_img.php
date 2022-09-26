<?php
    require '../../../modelo/modelo_imagen.php';
    $MU = new Modelo_Imagen();
    $id = htmlspecialchars($_POST['id'],ENT_QUOTES, 'UTF-8');
    $fotoactual = htmlspecialchars($_POST['foto'],ENT_QUOTES, 'UTF-8');
    $consulta = $MU->Eliminar_Img($id);
    echo $consulta;
    if($consulta==1){
        unlink('../../../'.$fotoactual);
    }
?>