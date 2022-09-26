<?php
    require_once 'modelo_conexion.php';

    class Modelo_Beneficio extends conexionBD{
        public function Registrar_Beneficio($texto,$id_usuario){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_REGISTRAR_BENE(?,?)"; //procedimiento almacenado 
            $query = $c->prepare($sql);
            $query->bindParam(1,$texto);
            $query->bindParam(2,$id_usuario);
            $resultado = $query->execute();
            //? SOLO SE USA CUANDO NO SE RETORNA UN VALOR EN EL PROCEDURE 
            if($resultado){
                return 1;
            }else{
                return 0;
            }
            conexionBD::cerrar_conexion();
        }

        public function Modificar_Beneficio($texto,$id_usuario,$b_id){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_MODIFICAR_BENE(?,?,?)"; //procedimiento almacenado 
            $query = $c->prepare($sql);
            $query->bindParam(1,$texto);
            $query->bindParam(2,$id_usuario);
            $query->bindParam(3,$b_id);
            $resultado = $query->execute();
            //? SOLO SE USA CUANDO NO SE RETORNA UN VALOR EN EL PROCEDURE 
            if($resultado){
                return 1;
            }else{
                return 0;
            }
            conexionBD::cerrar_conexion();
        }

        public function Eliminar_Bene($id){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_ELIMINAR_BENE(?)"; //procedimiento almacenado 
            $query = $c->prepare($sql);
            $query->bindParam(1,$id);
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