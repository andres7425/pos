<!--=====================================
EDITAR USUARIO
======================================-->
    <div class="content">
  <div class="card">

    <div class="card-body">

      <form role="form-row" method="post" enctype="multipart/form-data">

      <?php
        $item = "id";
        $valor = $_GET["idUsuario"];

        $usuario = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
        ?>

        <div class="card-header">

          <h1 class="title">Editar usuario</h1>

        </div>

        <!-- ENTRADA PARA EL NOMBRE -->

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nombre</label>
            <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value="<?php echo $usuario["nombre"]; ?>" required>
          </div>
          <!-- ENTRADA PARA EL USUARIO -->
          <div class="form-group col-md-6">
            <label>Usuario</label>
            <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" value="<?php echo $usuario["usuario"]; ?>" readonly>
          </div>
        

        <div class="form-group col-md-6">
          <label>Contraseña</label>

          <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Escriba la nueva contraseña">
          <input type="hidden" id="passwordActual" name="passwordActual">

        </div>
  
          <div class="form-group col-md-6">
            <label>Tipo de usuario</label>
            <select class="form-control input-lg" name="editarPerfil">
                  
              <option value="" id="editarPerfil"><?php echo $usuario["perfil"]; ?></option>

              <option value="Administrador">Administrador</option>

              <option value="Especial">Especial</option>

              <option value="Vendedor">Vendedor</option>

            </select>
          </div>
          <!-- ENTRADA PARA SUBIR FOTO -->

          <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="editarFoto">

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="<?php echo $usuario["foto"]; ?>" class="img-thumbnail previsualizar" width="100px">

              <input type="hidden" name="fotoActual" id="fotoActual">
                
            </div>

          </div>
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="submit" class="btn btn-info">Guardar cambios</button>

        </div>

        <?php

          $editarUsuario = new ControladorUsuarios();
          $editarUsuario -> ctrEditarUsuario();

        ?>

      </form>

    </div>
  </div>
  
