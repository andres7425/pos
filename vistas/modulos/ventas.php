<?php

if($_SESSION["perfil"] == "Especial"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}
?>

<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header">
          <h1 class="card-title">Historial de ventas</h1>
          <a href="crear-venta">
          <button class="btn btn-default btnCrearUsuario" data-toggle="modal" data-taget="#modalAgregarUsuario">Registrar venta</button>
          </a>
          <button type="button" class="btn btn-default pull-right" id="daterange-btn">
           
            <span>
              <i class="fa fa-calendar"></i> Rango de fecha
            </span>

            <i class="fa fa-caret-down"></i>

         </button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <?php
              $xml = ControladorVentas::ctrDescargarXML();

              if($xml){

                rename($_GET["xml"].".xml", "xml/".$_GET["xml"].".xml");

              // echo '<a class="btn btn-block btn-success abrirXML" archivo="xml/'.$_GET["xml"].'.xml" href="ventas">Se ha creado correctamente el archivo XML <span class="fa fa-times pull-right"></span></a>';

                echo '<a class="alert-link abrirXML" name="abirXML" archivo="xml/'.$_GET["xml"].'.xml" href="">
                       <div class="alert alert-success pull-center" role="alert">
                            Se ha creado correctamente el archivo XML
                        </div>
                      </a>';
              }
              ?>

            <table class="table dt-responsive tablas" width="100%"  >
              <thead class=" text-primary">
              <tr>
           <th style="width:10px">#</th>
           <th>Código factura</th>
           <th>Cliente</th>
           <th>Vendedor</th>
           <th>Forma de pago</th>
           <th>Neto</th>
           <th>Total</th> 
           <th>Fecha</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
          <?php

            if(isset($_GET["fechaInicial"])){

            $fechaInicial = $_GET["fechaInicial"];
            $fechaFinal = $_GET["fechaFinal"];

            }else{

              $fechaInicial = null;
              $fechaFinal = null;

              }

              $respuesta = ControladorVentas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);

            foreach ($respuesta as $key => $value) {
           

              echo '<tr>
   
                     <td>'.($key+1).'</td>
   
                     <td>'.$value["codigo"].'</td>';
   
                     $itemCliente = "id";
                     $valorCliente = $value["id_cliente"];
   
                     $respuestaCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);
   
                     echo '<td>'.$respuestaCliente["nombre"].'</td>';
   
                     $itemUsuario = "id";
                     $valorUsuario = $value["id_vendedor"];
   
                     $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);
   
                     echo '<td>'.$respuestaUsuario["nombre"].'</td>
   
                     <td>'.$value["metodo_pago"].'</td>
   
                     <td>$ '.number_format($value["neto"],2).'</td>
   
                     <td>$ '.number_format($value["total"],2).'</td>
   
                     <td>'.$value["fecha"].'</td>
   
                     <td>
   
                     <div class="btn-group" >

                    

                     <button class="btn btn-info btn-link btn-icon btn-sm  btnImprimirFactura" codigoVenta="'.$value["codigo"].'">

                     <i class="fa fa-print"></i>

                      </button>

                     <a class="btn btn-success btn-link btn-icon btn-sm " href="index.php?ruta=ventas&xml='.$value["codigo"].'">
                     
                     <button class="btn btn-success btn-link btn-icon btn-sm"">xml</button>
                     </a>';
                     
                        
  
                     
                        if($_SESSION["perfil"] == "Administrador") {
                          
                        echo'
                         <button class="btn btn-warning btn-link btn-icon btn-sm btnEditarVenta" idVenta="'.$value["id"].'"><i class="fa fa-edit"></i></button>
   
                         <button class="btn btn-danger btn-link btn-icon btn-sm  btnEliminarVenta" idVenta="'.$value["id"].' style="width:1px""><i class="fa fa-times"></i></button>';
                        }
   
                       echo '</div>  
   
                     </td>
   
                   </tr>';
               }
   
           ?>
        </tbody>
        </table>
        <?php
          $eliminarVenta = new ControladorVentas();
          $eliminarVenta -> ctrEliminarVenta();
        ?>
          </div>
        </div>
      </div>
    </div>