<!--=====================================
EDITAR CLIENTE
======================================-->
<div class="content">
  <div class="card">

    <div class="card-body">

      <form role="form-row" method="post" enctype="multipart/form-data">
      <?php

        $item = "id";
        $valor = $_GET["idCliente"];

        $cliente = ControladorClientes::ctrMostrarClientes($item, $valor);
        ?>

        <div class="card-header">

          <h1 class="title">Agregar Cliente</h1>

        </div>

        <!-- ENTRADA PARA EL NOMBRE -->

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nombre</label>
            <input type="text" class="form-control input-lg" name="editarCliente" id="editarCliente" value="<?php echo $cliente["nombre"]; ?>" required>
            <input type="hidden" id="idCliente" name="idCliente" value="<?php echo $cliente["id"]; ?>">
          </div>

          <!-- ENTRADA PARA EL DOCUMENTO -->

          <div class="form-group col-md-6">
            <label>Documento</label>
            <input type="number" min="0" class="form-control input-lg" name="editarDocumentoId"  id="editarDocumentoId" value="<?php echo $cliente["documento"]; ?>" required>
          </div>

          <!-- ENTRADA PARA EL EMAIL -->
        
        <div class="form-group col-md-6">
          <label>Correo</label>
          <input type="email" class="form-control input-lg" name="editarEmail" id="editarEmail" value="<?php echo $cliente["email"]; ?>" required>
        </div>

        <!-- ENTRADA PARA EL TELÉFONO -->
  
          <div class="form-group col-md-6">
            <label for="inputState">Telefono</label>
            <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono" data-inputmask="'mask':'(999) 999-9999'" value="<?php echo $cliente["telefono"]; ?>" data-mask required>
            </select>
          </div>

          <!-- ENTRADA PARA LA DIRECCIÓN -->

          <div class="form-group col-md-6">             
            <div class="panel">Dirección</div>
            <input type="text" class="form-control input-lg" name="editarDireccion" id="editarDireccion" value="<?php echo $cliente["direccion"]; ?>" required>
          </div>

        </div>
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="submit" class="btn btn-info">Guardar cambios</button>

        </div>

        <?php

        $editarCliente = new ControladorClientes();
        $editarCliente -> ctrEditarCliente();

      ?>

      </form>

    </div>
  </div>
  
