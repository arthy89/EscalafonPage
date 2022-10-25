<?php
require 'serverside.php';
$table_data->getObtnerListadoUsario('view_listar_usuario','usu_id',array('usu_id','usu_nombre','usu_apaterno','usu_amaterno','usu_contrasena','usu_email','usu_foto','usu_detalle','usu_direccion','rol_id','rol_nombre','usu_log','usu_est'));
 
?>