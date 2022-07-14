<!-- head -->
<?php include('../partes/head.php') ?>
    <!-- fin head -->
<body>
 <div class="d-flex" id="content-wrapper">
<!-- sideBar -->
<?php include('../partes/sidebar.php') ?>
    <!-- fin sideBar -->
    <div class="w-100">
    <!-- Navbar -->
    <?php include('../partes/nav.php') ?>
    <!-- Fin Navbar -->
    <div id="content" class=" bg-light w-1000">
    <section class="bg-light py-3">
        <div class="container border-bottom ">
            <div class="row ">
                    <div class="col-lg-6 col-md-8">
                    <h1 class="font-weight-bold mb-0">Crear nuevo registro</h1>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-12"><br></div>
            </div>
            <!-- Formulario Crear nuevo Aviso de Conserjería -->
            <form action="../../controlador/hu4_controlador_conserjeria/hu4_crear_aviso" method="POST">
                <!-- Selector de Tipo de Registro -->
                <div class="row">
                  <div class="col-4">
                    <div>
                      <label >Seleccione tipo de registro</label>
                    </div>
                  </div>
                  <div class="col-5">
                    <select class="form-select" name="tipo" required>
                            <option value="0" selected>Tipo de Registro</option>
                            <option value="1">Bitacora</option>
                            <option value="2">Encomienda</option>
                            <option value="3">Otro</option>
                    </select>
                  </div>
              </div>
                <!-- Un titulo para el aviso -->
                <div class="row">
                  
                  <div class="form-group col-7">
                    <label for="exampleInputPassword1"  class="form-label">Titulo</label>
                    <input type="text" placeholder="Entrega de llaves" class="form-control" name="titulo" required>
                  </div> 
                </div>
                <!-- Fecha y Hora del registro -->
                <div class="row">
                  
                  <div class="form-group col-3">
                    <label for="exampleInputPassword1" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="datepicker" name="fecha" required>
                  </div>
                  <div class="col-1"></div>
                  <div class="form-group col-3">
                      <label for="exampleInputPassword1" class="form-label">Hora</label>
                      <input type="time" class="form-control" id="datepicker" name="hora" required>
                  </div>
                </div>
                <!-- Descripcion del Aviso -->
                <div class="row">
                    <div class="col-2">
                    <label >Comentario</label>
                    </div>
                    <div class="col-5 campo" >
                    <textarea class="input-text form-control" name="descripcion" style="height: 135px; width:100%;"></textarea>
                    </div>
                </div>
                <br>
                <!--  -->
                <div class="row">
                    <div class="col-2">
                    <label>Destacar</label>
                    </div>
                    <div class="col-1">
                    <input class="form-check-input" type="radio" name="destacado" value="0" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      no
                    </label>
                    </div>
                    <div class="col-3">
                      
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="destacado" value="1" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                      si
                    </label>
                    
                    </div>
                    </div>
                    </div>
                    <div class="col-1">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    <div class="col-6"><br></div>
                </div>

            </form>
        </div>
    </section>
    
    </div>
    </div>
    </div>
</body>