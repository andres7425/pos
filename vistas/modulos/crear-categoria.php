<!--=====================================
AGREGAR CATEGORIA
======================================-->
<div class="content">
  <div class="card">

    <div class="card-body">

      <form role="form-row" method="post" enctype="multipart/form-data">

        <div class="card-header">

          <h1 class="title">Agregar categoria</h1>

        </div>

        <!-- ENTRADA PARA EL NOMBRE -->

        
          <div class="form-group col-md-6">
            <label>Nombre</label>
            <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar categoría" required>
          

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="submit" class="btn btn-info">Guardar categoria</button>

        </div>

        <?php

          $crearCategoria = new ControladorCategorias();
          $crearCategoria -> ctrCrearCategoria();

        ?>

      </form>

    </div>
  </div>
  
