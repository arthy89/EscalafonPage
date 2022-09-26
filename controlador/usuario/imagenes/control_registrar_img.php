<?php
    require '../../../modelo/modelo_imagen.php';
    $ruta = "";
    $MU = new Modelo_Imagen();
    $usu_id = htmlspecialchars($_POST['uid'],ENT_QUOTES, 'UTF-8');
    $img_name = htmlspecialchars($_POST['fnom'],ENT_QUOTES, 'UTF-8');
    $nomfoto = htmlspecialchars($_POST['fn'],ENT_QUOTES, 'UTF-8');
    if(empty($nomfoto)){
        $ruta='controlador/imgs/defecto.jpg';
    }else{
        $ruta='controlador/imgs/'.$nomfoto;
    }
    $consulta = $MU->RegistrarImg($usu_id,$img_name,$ruta);
    echo $consulta;
    if($consulta==1){
        if(!empty($nomfoto)){
            if(move_uploaded_file($_FILES['f']['tmp_name'],"../../imgs/".$nomfoto));
        }
    }
?>