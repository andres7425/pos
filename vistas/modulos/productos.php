<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header">
          <h1 class="card-title">Administar productos</h1>
          <a href="crear-producto">
          <button class="btn btn-default" data-toggle="modal" data-target="#modalAgregarProducto">
          Agregar producto
        </button>
        </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter  table-striped dt-responsive tablaProductos" width="100%">
              <thead class=" text-primary">
              <tr>
           
           <th style="width:10px">#</th>
           <th>Imagen</th>
           <th>Código</th>
           <th>Descripción</th>
           <th>Categoría</th>
           <th>Stock</th>
           <th>Precio de compra</th>
           <th>Precio de venta(sin IVA)</th>
           <th>Agregado</th>
           <th>Acciones</th>
           
         </tr> 

        </thead>

        <tbody>
                 
        </tbody> 

       </table>
       
            
            

          </div>
        </div>
      </div>
    </div>

    <?php

  $eliminarProducto = new ControladorProductos();
  $eliminarProducto -> ctrEliminarProducto();

?> 