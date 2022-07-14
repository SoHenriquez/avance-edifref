<?php
require_once("C:/xampp/htdocs/grupo-7edifref/bds/conexion.php");

$consultaAvisosSql = "SELECT form_clave,U.usuario_correo, U.usuario_nombre,date_format(F.form_fecha, '%d-%m-%Y') AS fecha_formateada,F.form_hora, F.form_titulo, T.tipo_form_nombre, F.form_descripcion  FROM formulario F,usuario U, tipo_formulario T WHERE U.tipo_usuario_clave=1 AND F.tipo_form_clave=T.tipo_form_clave;";
$consultaAvisos= mysqli_query($con,$consultaAvisosSql);

?>