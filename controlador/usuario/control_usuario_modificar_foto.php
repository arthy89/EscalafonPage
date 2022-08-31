<?php
    require '../../modelo/modelo_usuario.php';
    $ruta = "";
    $MU = new Modelo_Usuario();
    $id = htmlspecialchars($_POST['id'],ENT_QUOTES, 'UTF-8');
    $nomfoto = htmlspecialchars($_POST['fn'],ENT_QUOTES, 'UTF-8');
    $fotoactual = htmlspecialchars($_POST['fotoactual'],ENT_QUOTES, 'UTF-8');
    if(empty($nomfoto)){
        $ruta='controlador/usuario/foto/default.png';
    }else{
        $ruta='controlador/usuario/foto/'.$nomfoto;
    }
    
    $consulta = $MU->Modificar_Foto($id,$ruta);
    echo $consulta;
    if($consulta==1){
        if(!empty($nomfoto)){
            if(move_uploaded_file($_FILES['f']['tmp_name'],"foto/".$nomfoto));
            unlink('../../'.$fotoactual);
        }
    }
?>