<?php
    require_once 'modelo_conexion.php';

    class Modelo_Usuario extends conexionBD{
        public function VerificarUsuario($usuario,$pass){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_VERIFICAR_USUARIO(?)"; //procedimiento almacenado 
            $arreglo = array();
            $query = $c->prepare($sql);
            $query->bindParam(1,$usuario);
            $query->execute();
            $resultado = $query->fetchAll();
            foreach($resultado as $resp){
                if(password_verify($pass,$resp['usu_contrasena'])){
                    $arreglo[] = $resp;   
                }
            }

            return $arreglo;
            conexionBD::cerrar_conexion();
        }

        public function listar_usuario(){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_LISTAR_USUARIO()"; //procedimiento almacenado 
            $arreglo = array();
            $query = $c->prepare($sql);
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultado as $resp){
                    $arreglo["data"][] = $resp;
            }

            return $arreglo;
            conexionBD::cerrar_conexion();
        }

        public function listar_rol(){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_LISTAR_ROL()"; //procedimiento almacenado 
            $arreglo = array();
            $query = $c->prepare($sql);
            $query->execute();
            $resultado = $query->fetchAll();
            foreach($resultado as $resp){
                    $arreglo[] = $resp;
            }

            return $arreglo;
            conexionBD::cerrar_conexion();
        }

        public function RegistrarUsuario($usulog,$usuario,$apaterno,$amaterno,$email,$rol,
    $contra,$detalle,$direccion,$ruta){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_REGISTRAR_USUARIO(?,?,?,?,?,?,?,?,?,?)"; //procedimiento almacenado 
            $query = $c->prepare($sql);
            $query->bindParam(1,$usulog);
            $query->bindParam(2,$usuario);
            $query->bindParam(3,$apaterno);
            $query->bindParam(4,$amaterno);
            $query->bindParam(5,$email);
            $query->bindParam(6,$rol);
            $query->bindParam(7,$contra);
            $query->bindParam(8,$detalle);
            $query->bindParam(9,$direccion);
            $query->bindParam(10,$ruta);
            $resultado = $query->execute();

            if($row = $query->fetchColumn()){
                return $row;
            }

            //? SOLO SE USA CUANDO NO SE RETORNA UN VALOR EN EL PROCEDURE 
            // if($resultado){
            //     return 1;
            // }else{
            //     return 0;
            // }
            conexionBD::cerrar_conexion();
        }

        public function ModificarUsuario($id,$usuario,$apaterno,$amaterno,$email,$detalle,$direccion,$rol){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_MODIFICAR_USUARIO(?,?,?,?,?,?,?,?)"; //procedimiento almacenado 
            $query = $c->prepare($sql);
            $query->bindParam(1,$id);
            $query->bindParam(2,$usuario);
            $query->bindParam(3,$apaterno);
            $query->bindParam(4,$amaterno);
            $query->bindParam(5,$email);
            $query->bindParam(6,$detalle);
            $query->bindParam(7,$direccion);
            $query->bindParam(8,$rol);
            $resultado = $query->execute();

            if($resultado){
                return 1;
            }else{
                return 0;
            }

            conexionBD::cerrar_conexion();
        }

        public function Modificar_Foto($id,$ruta){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_MODIFICAR_FOTO(?,?)"; //procedimiento almacenado 
            $query = $c->prepare($sql);
            $query->bindParam(1,$id);
            $query->bindParam(2,$ruta);
            $resultado = $query->execute();

            if($resultado){
                return 1;
            }else{
                return 0;
            }

            conexionBD::cerrar_conexion();
        }
    }
?>