<!--=====================================
AGREGAR CATEGORIA
======================================-->
<div class="content">
  <div class="card">

    <div class="card-body">

      <form role="form-row" method="post" enctype="multipart/form-data">

        <div class="card-header">

          <h1 class="title">Agregar negocio</h1>

        </div>

        <!-- ENTRADA PARA EL NOMBRE -->

        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Nombre</label>
            <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>
          </div>
          <div class="form-group col-md-6">
            <label>Dueño</label>
            <input type="text" class="form-control input-lg" name="nuevoDueno" placeholder="Ingresar Dueno" id="nuevoDueno" required>
          </div>
        

        <div class="form-group col-md-6">
          <label>Nit</label>
          <input type="number" class="form-control input-lg" name="nuevoNit" placeholder="Ingresar nit" required>
        </div>
  
          <div class="form-group col-md-6">
            <label for="inputState">Tipo de Regimen</label>
            <input type="text" class="form-control input-lg" name="nuevoRegimen" placeholder="Ingresar Regimen" required>
            
          </div>
          <!-- ENTRADA PARA SUBIR FOTO -->

          <div class="form-group">
              
            <div class="panel">SUBIR FOTO</div>

            <input type="file" class="nuevaFoto" name="nuevaFoto">

            <p class="help-block">Peso máximo de la foto 2MB</p>

            <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

          </div>

        </div>
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="submit" class="btn btn-info">Guardar usuario</button>

        </div>

        <?php

          $crearNegocio = new ControladorNegocios();
          $crearNegocio -> ctrCrearNegocio();

        ?>

      </form>

    </div>
  </div>
  
