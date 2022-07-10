<?php
$dsn = 'mysql:dbname=esc_bd;host=localhost';
$usuario = 'root';
$contraseña = '';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña);
} catch (PDOException $e) {
    echo 'Fallo de conexion: ' . $e->getMessage();
}

class conexionBD{
public function conexionPDO(){
        $host       ='localhost';
        $usuario    ='root';
        $contrasena = '';
        $dbName     = 'esc_bd';
    
        try{
            $pdo = new PDO("mysql:host=$host;dbname=$dbName", $usuario,$contrasena);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
            return $pdo;
        }catch(Exception $e){
            echo "la conexion ha fallado";
        }
    }
    function cerrar_conexion(){
        $this->$pdo=null;
    }
}
?>