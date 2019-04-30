<!--=====================================
AGREGAR PRODUCTO
======================================-->
<div class="content">
  <div class="card">

    <div class="card-body">

      <form role="form-row" method="post" enctype="multipart/form-data">

        <div class="card-header">

          <h1 class="title">Agregar Producto</h1>

        </div>

        <!-- ENTRADA PARA EL NOMBRE -->

        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Categoria</label>
            <select class="form-control input-lg" id="nuevaCategoria" name="nuevaCategoria" required>               
                  <option value="">Selecionar categoría</option>
                  <?php
                  $item = null;
                  $valor = null;
                  $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
                  foreach ($categorias as $key => $value) {
                    echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                  }
                  ?>
                </select>
              </div>

        <!-- ENTRADA PARA EL CODIGO -->

          <div class="form-group col-md-6">
            <label>Codigo</label>
            <input type="text" class="form-control input-lg" id="nuevoCodigo" name="nuevoCodigo" placeholder="Ingresar código" readonly required>
          </div>
        
        <!-- ENTRADA PARA LA DESCRIPCIÓN -->

        <div class="form-group col-md-6">
          <label>Descripción</label>
          <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripción" required>
        </div>

        <!-- ENTRADA PARA LA CANTIDAD -->
  
          <div class="form-group col-md-6">
            <label for="inputState">Cantidad</label>
            <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Stock" required>
          </div>

        <!-- ENTRADA PARA EL PRECIO DE COMPRA -->

        <div class="form-group col-md-6">
            <label>Precio compra</label>
            <input type="number" class="form-control input-lg" id="nuevoPrecioCompra" name="nuevoPrecioCompra" min="0" step="any" placeholder="Precio de compra" required>
        </div>

          <!-- ENTRADA PARA PRECIO DE VENTA -->

          <div class="form-group col-md-6">      
            <div class="panel">Precio venta (Sin IVA)</div>
            <input type="number" class="form-control input-lg" id="nuevoPrecioVenta" name="nuevoPrecioVenta" min="0" step="any" placeholder="Precio de venta" required>
          </div>

          <!-- ENTRADA PARA SUBIR FOTO -->
        <div class="form-group col-md-6">      
            <div class="panel">Subir imagen</div>
            <input type="file" class="nuevaImagen" name="nuevaImagen">
            <p class="help-block">Peso máximo de la imagen 2MB</p>
            <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
        </div>

          </div>
        
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="submit" class="btn btn-info">Guardar Producto</button>

        </div>

        <?php

        $crearProducto = new ControladorProductos();
        $crearProducto -> ctrCrearProducto()

        ?>

      </form>

    </div>
  </div>
  
