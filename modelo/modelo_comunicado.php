<?php
    require_once 'modelo_conexion.php';

    class Modelo_Comunicado extends conexionBD{
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