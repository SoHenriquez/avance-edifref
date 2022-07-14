<?php 

require_once("../../bds/conexion.php");


   $form_clave =  $_POST["form_clave"];
   $tipo_anuncio = $_POST["tipo_form_actualizar"];
   $fecha = $_POST["fecha_actualizar"];
   $titulo = $_POST["titulo_actualizar"];
   $descripcion = $_POST["descripcion_actualizar"];
    if(isset($_POST['form_clave'])){
        $modificarPublicacion_avisoSql = "UPDATE `formulario` 
        SET tipo_form_clave = '$tipo_anuncio', form_titulo = '$titulo',  form_fecha = '$fecha', form_descripcion = '$descripcion'
        WHERE form_clave = '$form_clave' ";
        
        $modificarPublicacion_aviso = mysqli_query($con,$modificarPublicacion_avisoSql);
        if(!$modificarPublicacion_aviso){
            die("Error al actualizar datos");
        }
        header("Location: http://localhost/grupo-7edifref/vistas");
    }
   
   


  
   
   

?>