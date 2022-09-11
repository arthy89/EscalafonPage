<?php
    require_once 'modelo_conexion.php';

    class Modelo_Comunicado extends conexionBD{
        public function Registrar_Comunicado($titulo,$contenido,$tlink,$link,$fecha,$hora,
    $font_name,$font_ico,$id_usuario){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_REGISTRAR_COMUNICADO(?,?,?,?,?,?,?,?,?)"; //procedimiento almacenado 
            $query = $c->prepare($sql);
            $query->bindParam(1,$titulo);
            $query->bindParam(2,$contenido);
            $query->bindParam(3,$tlink);
            $query->bindParam(4,$link);
            $query->bindParam(5,$fecha);
            $query->bindParam(6,$hora);
            $query->bindParam(7,$font_name);
            $query->bindParam(8,$font_ico);
            $query->bindParam(9,$id_usuario);
            $resultado = $query->execute();
            //? SOLO SE USA CUANDO NO SE RETORNA UN VALOR EN EL PROCEDURE 
            if($resultado){
                return 1;
            }else{
                return 0;
            }
            conexionBD::cerrar_conexion();
        }

        public function Modificar_Comunicado($orden,$ordenew,$titulo,$contenido,$tlink,$link,$fecha,$hora,$font_name,$font_ico,$id_usuario){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_MODIFICAR_COMUNICADO(?,?,?,?,?,?,?,?,?,?,?)";
            $query = $c->prepare($sql);
            $query->bindParam(1,$orden);
            $query->bindParam(2,$ordenew);
            $query->bindParam(3,$titulo);
            $query->bindParam(4,$contenido);
            $query->bindParam(5,$tlink);
            $query->bindParam(6,$link);
            $query->bindParam(7,$fecha);
            $query->bindParam(8,$hora);
            $query->bindParam(9,$font_name);
            $query->bindParam(10,$font_ico);
            $query->bindParam(11,$id_usuario);
            $resultado = $query->execute();
            if($row = $query->fetchColumn()){
                return $row;
            }
            conexionBD::cerrar_conexion();
        }

        public function Eliminar_Comunicado($id){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_ELIMINAR_COMUNICADO(?)"; //procedimiento almacenado 
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

        public function listar_ico(){
            $c = conexionBD::conexionPDO();

            $sql = "CALL SP_LISTAR_ICO()"; //procedimiento almacenado 
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

    }
?>