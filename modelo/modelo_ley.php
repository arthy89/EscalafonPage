<?php
    require_once 'modelo_conexion.php';

    class Modelo_Ley extends conexionBD{
        public function Registrar_Ley($ley,$texto,$font_name,$font_ico,$id_usuario){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_REGISTRAR_LEY(?,?,?,?,?)"; //procedimiento almacenado 
            $query = $c->prepare($sql);
            $query->bindParam(1,$ley);
            $query->bindParam(2,$texto);
            $query->bindParam(3,$font_name);
            $query->bindParam(4,$font_ico);
            $query->bindParam(5,$id_usuario);
            $resultado = $query->execute();
            //? SOLO SE USA CUANDO NO SE RETORNA UN VALOR EN EL PROCEDURE 
            if($resultado){
                return 1;
            }else{
                return 0;
            }
            conexionBD::cerrar_conexion();
        }

        public function Editar_Ley($ley,$texto,$font_name,$font_ico,$id_usuario,$id_ley){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_MODIFICAR_LEY(?,?,?,?,?,?)"; //procedimiento almacenado 
            $query = $c->prepare($sql);
            $query->bindParam(1,$ley);
            $query->bindParam(2,$texto);
            $query->bindParam(3,$font_name);
            $query->bindParam(4,$font_ico);
            $query->bindParam(5,$id_usuario);
            $query->bindParam(6,$id_ley);
            $resultado = $query->execute();
            //? SOLO SE USA CUANDO NO SE RETORNA UN VALOR EN EL PROCEDURE 
            if($resultado){
                return 1;
            }else{
                return 0;
            }
            conexionBD::cerrar_conexion();
        }

        public function Eliminar_Ley($id){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_ELIMINAR_LEY(?)"; //procedimiento almacenado 
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