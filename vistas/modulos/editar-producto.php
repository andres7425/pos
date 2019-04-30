<!--=====================================
EDITAR PRODUCTO
======================================-->
<div class="content">
  <div class="card">

    <div class="card-body">

      <form role="form-row" method="post" enctype="multipart/form-data">

      <?php
        $item = "id";
        $valor = $_GET["idProducto"];
        $orden = "";

        $producto = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

        $itemCategoria = "id";
        $valorCategoria = $producto["id_categoria"];

        $categoria = ControladorCategorias::ctrMostrarCategorias($itemCategoria, $valorCategoria);
        ?>
        <div class="card-header">

          <h1 class="title">Editar Producto</h1>

        </div>

        <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->
        
          <div class="form-group col-md-6">
            <label>Categoria</label>
            <select class="form-control input-lg"  name="editarCategoria" readonly required>
                  <option id="editarCategoria" value="<?php echo $categoria["categoria"]; ?>"><?php echo $categoria["categoria"]; ?></option>          
            </select>
          </div>    

        <!-- ENTRADA PARA EL CÓDIGO -->

        <div class="form-group col-md-6">
            <label>Codio</label>
            <input type="text" class="form-control input-lg" id="editarCodigo" name="editarCodigo" value="<?php echo $producto["codigo"]; ?>" readonly required>
        </div> 

        <!-- ENTRADA PARA LA DESCRIPCIÓN -->

        <div class="form-group col-md-6">
            <label>Descripción</label>
            <input type="text" class="form-control input-lg" id="editarDescripcion" name="editarDescripcion" value="<?php echo $producto["descripcion"]; ?>" required>
        </div> 

        <!-- ENTRADA PARA STOCK -->

        <div class="form-group col-md-6">
            <label>Cantidad</label>
            <input type="number" class="form-control input-lg" id="editarStock" name="editarStock" min="0"  value="<?php echo $producto["stock"]; ?>" required>
        </div>
        
        <!-- ENTRADA PARA PRECIO COMPRA -->

        <div class="form-group col-md-6">
            <label>Precio de compra</label>
            <input type="number" class="form-control input-lg" id="editarPrecioCompra" name="editarPrecioCompra" step="any" min="0" value="<?php echo $producto["precio_compra"]; ?>" required>
        </div>

        <!-- ENTRADA PARA PRECIO VENTA -->

        <div class="form-group col-md-6">
            <label>Precio de venta (Sin IVA)</label>
            <input type="number" class="form-control input-lg" id="editarPrecioVenta" name="editarPrecioVenta" step="any" min="0" value="<?php echo $producto["precio_venta"]; ?>" required>
        </div>

        <!-- ENTRADA PARA SUBIR FOTO -->

        <div class="form-group col-md-12">
              
              <div class="panel">SUBIR IMAGEN</div>

              <input type="file" class="nuevaImagen" name="editarImagen">

              <p class="help-block">Peso máximo de la imagen 2MB</p>

              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

              <input type="hidden" name="imagenActual" id="imagenActual">

            </div>

          </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="submit" class="btn btn-info">Guardar cambio</button>

        </div>

        <?php

            $editarProducto = new ControladorProductos();
            $editarProducto -> ctrEditarProducto();

        ?> 

      </form>

    </div>
  </div>
  