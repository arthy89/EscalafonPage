<?php
    require '../../modelo/modelo_usuario.php';
    $ruta = "";
    $MU = new Modelo_Usuario();
    $usuario = htmlspecialchars($_POST['u'],ENT_QUOTES, 'UTF-8');
    $apaterno = htmlspecialchars($_POST['p'],ENT_QUOTES, 'UTF-8');
    $amaterno = htmlspecialchars($_POST['m'],ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['e'],ENT_QUOTES, 'UTF-8');
    $contra = password_hash($_POST['c'],PASSWORD_DEFAULT,['cost'=>12]);
    $detalle = htmlspecialchars($_POST['de'],ENT_QUOTES, 'UTF-8');
    $direccion = htmlspecialchars($_POST['di'],ENT_QUOTES, 'UTF-8');
    $nomfoto = htmlspecialchars($_POST['fn'],ENT_QUOTES, 'UTF-8');
    // $fotoobject = htmlspecialchars($_POST['f'],ENT_QUOTES, 'UTF-8');
    $rol = htmlspecialchars($_POST['r'],ENT_QUOTES, 'UTF-8');
    if(empty($nomfoto)){
        $ruta='controlador/usuario/foto/default.png';
    }else{
        $ruta='controlador/usuario/foto/'.$nomfoto;
    }

    

    $consulta = $MU->RegistrarUsuario($usuario,$apaterno,$amaterno,$email,$rol,
    $contra,$detalle,$direccion,$ruta);
    echo $consulta;
    if($consulta==1){
        if(!empty($nomfoto)){
            if(move_uploaded_file($_FILES['f']['tmp_name'],"foto/".$nomfoto));
        }
    }
?>