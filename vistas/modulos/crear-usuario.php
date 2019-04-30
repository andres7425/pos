<!--=====================================
AGREGAR CATEGORIA
======================================-->
<div class="content">
  <div class="card">

    <div class="card-body">

      <form role="form-row" method="post" enctype="multipart/form-data">

        <div class="card-header">

          <h1 class="title">Agregar usuario</h1>

        </div>

        <!-- ENTRADA PARA EL NOMBRE -->

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nombre</label>
            <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>
          </div>
          <div class="form-group col-md-6">
            <label>Usuario</label>
            <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" id="nuevoUsuario" required>
          </div>
        

        <div class="form-group col-md-6">
          <label>Contraseña</label>
          <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>
        </div>
  
          <div class="form-group col-md-6">
            <label for="inputState">Tipo de usuario</label>
            <select class="form-control input-lg selectpiker" data-style="select-with-transition" name="nuevoPerfil">
                  
              <option value="">Selecionar perfil</option>

              <option value="Administrador">Administrador</option>

              <option value="Especial">Especial</option>

              <option value="Vendedor">Vendedor</option>

            </select>

            
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

          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();

        ?>

      </form>

    </div>
  </div>
  
