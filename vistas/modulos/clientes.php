<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header">
          <h1 class="card-title">Administar clientes</h1>
          <a href="crear-cliente">
          <button class="btn btn-default btnCrearCliente" data-toggle="modal" data-taget="#modalAgregarCliente">Agregar cliente</button>
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter table-striped dt-responsive tablas" width="100%"  >
              <thead class=" text-primary">
              <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Documento ID</th>
           <th>Email</th>
           <th>Teléfono</th>
           <th>Dirección</th>
           <th>Fecha nacimiento</th> 
           <th>Total compras</th>
           <th>Última compra</th>
           <th>Ingreso al sistema</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
        <?php

          $item = null;
          $valor = null;

          $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

          foreach ($clientes as $key => $value) {
            

            echo '<tr>

                    <td>'.($key+1).'</td>

                    <td>'.$value["nombre"].'</td>

                    <td>'.$value["documento"].'</td>

                    <td>'.$value["email"].'</td>

                    <td>'.$value["telefono"].'</td>

                    <td>'.$value["direccion"].'</td>

                    <td>'.$value["fecha_nacimiento"].'</td>             

                    <td>'.$value["compras"].'</td>

                    <td>'.$value["ultima_compra"].'</td>

                    <td>'.$value["fecha"].'</td>

                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btn-link btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" idCliente="'.$value["id"].'"><i class="fa fa-edit"></i></button>';

                        if($_SESSION["perfil"] == "Administrador"){

                          echo '<button class="btn btn-danger btn-link btnEliminarCliente" idCliente="'.$value["id"].'"><i class="fa fa-times"></i></button>';
                      }
                      
                      echo '</div>  
                    </td>
                  </tr>';
          
            }

            ?>    
  
            </tbody>

        </table>
    
          </div>
        </div>
      </div>
    </div>

    <?php

      $eliminarCliente = new ControladorClientes();
      $eliminarCliente -> ctrEliminarCliente();

    ?>