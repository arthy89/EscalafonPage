<?php
    require_once 'modelo_conexion.php';

    class Modelo_Formato extends conexionBD{
        public function Registrar_Formato($titulo,$texto,$tlink,$link,$font_name,$font_ico,$id_usuario){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_REGISTRAR_FORMATO(?,?,?,?,?,?,?)"; //procedimiento almacenado 
            $query = $c->prepare($sql);
            $query->bindParam(1,$titulo);
            $query->bindParam(2,$texto);
            $query->bindParam(3,$tlink);
            $query->bindParam(4,$link);
            $query->bindParam(5,$font_name);
            $query->bindParam(6,$font_ico);
            $query->bindParam(7,$id_usuario);
            $resultado = $query->execute();
            //? SOLO SE USA CUANDO NO SE RETORNA UN VALOR EN EL PROCEDURE 
            if($resultado){
                return 1;
            }else{
                return 0;
            }
            conexionBD::cerrar_conexion();
        }

        public function Editar_Formato($id_formato,$titulo,$texto,$tlink,$link,$font_name,$font_ico,$id_usuario){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_MODIFICAR_FORMATO(?,?,?,?,?,?,?,?)"; //procedimiento almacenado 
            $query = $c->prepare($sql);
            $query->bindParam(1,$id_formato);
            $query->bindParam(2,$titulo);
            $query->bindParam(3,$texto);
            $query->bindParam(4,$tlink);
            $query->bindParam(5,$link);
            $query->bindParam(6,$font_name);
            $query->bindParam(7,$font_ico);
            $query->bindParam(8,$id_usuario);
            $resultado = $query->execute();
            //? SOLO SE USA CUANDO NO SE RETORNA UN VALOR EN EL PROCEDURE 
            if($resultado){
                return 1;
            }else{
                return 0;
            }
            conexionBD::cerrar_conexion();
        }

        public function Eliminar_Formato($id){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_ELIMINAR_FORMATO(?)"; //procedimiento almacenado 
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