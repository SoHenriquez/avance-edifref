<!-- head -->
<?php include('C:/xampp/htdocs/grupo-7edifref/partes/head.php') ?>
    <!-- fin head -->
<!-- Incluye Query para mostrar aviso -->
<?php require_once("C:/xampp\htdocs\grupo-7edifref\controlador\hu4_controlador_conserjeria\hu4_mostrar_aviso.php"); ?>
<!-- Fin incorporación de query oara mostrar aviso -->
<body>
<div class="d-flex" id="content-wrapper">
  <!-- sideBar -->
  <?php include('../partes/sidebar.php') ?>
    <!-- fin sideBar -->
    <div class="w-100">
    <?php include('../partes/nav.php') ?>
      <div id="content" class=" bg-light w-1000">
      <section class="bg-light py-3">
            <div class="container border-bottom ">
                <div class="row ">
                    <div class="col-lg-6 col-md-8">
                    <h1 class="font-weight-bold mb-0">Modificar registro</h1>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-12"><br></div>
                </div>
                <!-- Ciclo para recorrer columnas de la fila a editar -->
                <?php  if($consultaAvisos): foreach($consultaAvisos as $row): ?>
                  <?php  if($_GET['id'] == $row['form_clave']){?>
                  <!-- Formulario Crear nuevo Aviso de Conserjería -->
                <form action="../partes/hu4_modificar.php"  method="POST">
                  <div class="row">
                    <div class="col-4">
                      <div>
                        <label >Seleccione tipo de registro</label>
                      </div>
                    </div>
                    <div class="col-5">
                      <select class="form-select" name="tipo_form_actualizar" value="<?php echo $row['tipo_form_clave'];?>" required>
                              <option value="1" selected>Bitacora</option>
                              <option value="2">Encomienda</option>
                              <option value="3">Otro</option>
                      </select>
                    </div>
                  </div>
                  <!-- Modificar titulo y Fecha del aviso -->
                  <div class="row">
                    
                    <div class="form-group col-3">
                      <label for="exampleInputPassword1"  class="form-label">Titulo</label>
                      <input type="text" placeholder="Entrega de llaves" value="<?php echo $row['form_titulo'];?>" class="form-control" name="titulo_actualizar" required>
                    </div> 
                    <div class="col-1"></div>
                    <div class="col-3">
                      <label for="exampleInputPassword1" class="form-label">Fecha antigua: <?php echo $row['fecha_formateada'];?></label>
                      <input type="date" class="form-control" id="datepicker" name="fecha_actualizar" value="<?php echo $row['fecha_formateada'];?>" required>
                    </div>
                  </div>
                  <!-- Modificar Descripcion del Aviso -->
                  <div class="row">
                    
                    <div class="form-group col-2">
                    <label >Comentario</label>
                      </div>
                      <div class="col-5 campo" >
                      <textarea class="input-text form-control" name="descripcion_actualizar"  style="height: 135px; width:100%;"><?php echo $row['form_descripcion'];?></textarea>
                      
                    </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-5"></div>
                      <div class="col-1"><button type="reset" class="btn btn-primary"><i class="fa-solid fa-trash"></i>&nbsp</button></div>
                      <div class="form-group">
                      <button type="submit"  class="btn btn-primary">Enviar</button>
                      </div>
                  </div>
                  <input type="hidden" name="form_clave" value="<?php echo $row['form_clave']; ?>">

                  <?php }?>
                <?php endforeach; endif ?>
                </form>
            </div>
        </section>
      </div>
    </div>
</div>



</body>