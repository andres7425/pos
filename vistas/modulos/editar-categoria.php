<!--=====================================
EDIAR CATEGORIA
======================================-->
<div class="content">
  <div class="card">

    <div class="card-body">

      <form role="form-row" method="post" enctype="multipart/form-data">

      <?php
        $item = "id";
        $valor = $_GET["idCategoria"];

        $categoria = ControladorCategorias::ctrMostrarCategorias($item, $valor);
        ?>
        <div class="card-header">

          <h1 class="title">Editar categoría</h1>

        </div>

        <!-- ENTRADA PARA EL NOMBRE -->

        
          <div class="form-group col-md-6">
            <label>Nombre</label>
            <input type="text" class="form-control input-lg" name="editarCategoria" id="editarCategoria" value="<?php echo $categoria["categoria"]; ?>" required>
            <input type="hidden"  name="idCategoria" id="idCategoria" value="<?php echo $categoria["id"]; ?>" required>
          

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="submit" class="btn btn-info">Guardar cambio</button>

        </div>

        <?php

            $editarCategoria = new ControladorCategorias();
            $editarCategoria -> ctrEditarCategoria();

        ?> 

      </form>

    </div>
  </div>
  