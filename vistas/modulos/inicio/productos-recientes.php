<?php

$item = null;
$valor = null;
$orden = "id";

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

 ?>


<div class="card">

  <div class="card-title">

    <h2>Productos agregados recientemente</h2>

    </div>
  
    <div class="table-responsive">
      <table class="table tablesorter  table-striped dt-responsive" width="100%">
        <thead class=" text-primary">
          <tr>
           <th>Imagen</th>
           <th>Descripción</th>
           <th>Precio de venta(sin IVA)</th>
           
         </tr> 

        </thead>

        <tbody>
          <?php  
            for($i = 0; $i < 10; $i++){

              echo '<tr>
              <td style="width: 50px; height: 50px;"><img style="width: 50px; height: 50px;" src="'.$productos[$i]["imagen"].'" alt="Product Image"></td>
              <td>'.$productos[$i]["descripcion"].'</td>
              <td>$'.$productos[$i]["precio_venta"].'</td>       
              </tr>';

            }
          ?>
        </tbody> 

       </table>

  </div>


  <div class="box-footer text-center">

    <a href="productos" class="uppercase"><h3 class="text-success">Ver todos los productos</h3></a>
  
  </div>

  </div>
  </div>

