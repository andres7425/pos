<!--=====================================
AGREGAR CLIENTE
======================================-->
<div class="content">
  <div class="card">

    <div class="card-body">

      <form role="form-row" method="post" enctype="multipart/form-data">

        <div class="card-header">

          <h1 class="title">Agregar Cliente</h1>

        </div>

        <!-- ENTRADA PARA EL NOMBRE -->

        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Nombre</label>
            <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" required>
          </div>

          <!-- ENTRADA PARA EL DOCUMENTO -->

          <div class="form-group col-md-6">
            <label>Documento</label>
            <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" required>
          </div>

          <!-- ENTRADA PARA EL EMAIL -->
        
        <div class="form-group col-md-6">
          <label>Correo</label>
          <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>
        </div>

        <!-- ENTRADA PARA EL TELÉFONO -->
  
          <div class="form-group col-md-6">
            <label for="inputState">Telefono</label>
            <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

            </select>
          </div>

          <!-- ENTRADA PARA LA DIRECCIÓN -->

          <div class="form-group col-md-6">             
            <div class="panel">Dirección</div>
            <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>
          </div>

        </div>
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="submit" class="btn btn-info">Guardar Cliente</button>

        </div>

        <?php

          $crearCliente = new ControladorClientes();
          $crearCliente -> ctrCrearCliente();

        ?>

      </form>

    </div>
  </div>
  
