<?php

require_once("../grupo-7edifref/bds/conexion.php");


$tipo = $_POST['tipo'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$destacado= $_POST['destacado'];


$CrearAvisoSql = "INSERT INTO formulario(usuario_clave,tipo_form_clave, form_titulo, form_descripcion, form_fecha, form_hora, form_destacar) VALUES('1','$tipo','$titulo','$descripcion','$fecha','$hora',".$destacado.");";
$CrearAviso = mysqli_query($con, $CrearAvisoSql);



header("Location: http://localhost/grupo-7edifred/vistas/conserjeria.php");

?>