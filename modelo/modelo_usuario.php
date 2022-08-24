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

        public function RegistrarUsuario($usuario,$apaterno,$amaterno,$email,$rol,
        $contra,$detalle,$direccion,$ruta){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_REGISTRAR_USUARIO(?,?,?,?,?,?,?,?,?)"; //procedimiento almacenado 
            $query = $c->prepare($sql);
            $query->bindParam(1,$usuario);
            $query->bindParam(2,$apaterno);
            $query->bindParam(3,$amaterno);
            $query->bindParam(4,$email);
            $query->bindParam(5,$rol);
            $query->bindParam(6,$contra);
            $query->bindParam(7,$detalle);
            $query->bindParam(8,$direccion);
            $query->bindParam(9,$ruta);
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
    }
?>