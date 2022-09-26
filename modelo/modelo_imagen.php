<?php
    require_once 'modelo_conexion.php';

    class Modelo_Imagen extends conexionBD{


        public function RegistrarImg($usu_id,$img_name,$ruta){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_REGISTRAR_IMG(?,?,?)"; //procedimiento almacenado 
            $query = $c->prepare($sql);
            $query->bindParam(1,$usu_id);
            $query->bindParam(2,$img_name);
            $query->bindParam(3,$ruta);
            $resultado = $query->execute();

            if($resultado){
                return 1;
            }else{
                return 0;
            }

            conexionBD::cerrar_conexion();
        }

        public function Modificar_Img($id,$usu_id,$img_name,$ruta){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_MODIFICAR_IMG(?,?,?,?)"; //procedimiento almacenado 
            $query = $c->prepare($sql);
            $query->bindParam(1,$id);
            $query->bindParam(2,$usu_id);
            $query->bindParam(3,$img_name);
            $query->bindParam(4,$ruta);
            $resultado = $query->execute();

            if($resultado){
                return 1;
            }else{
                return 0;
            }

            conexionBD::cerrar_conexion();
        }

        public function Eliminar_Img($id){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_ELIMINAR_IMG(?)"; //procedimiento almacenado 
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