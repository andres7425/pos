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
          <h1 class="card-title">Administar Negocios</h1>
          <a href="crear-negocio">
          <button class="btn btn-default" data-toggle="modal" data-target="#modalAgregarNegocio">
          Agregar negocio
        </button>
        </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter  table-striped dt-responsive tablaNegocios" width="100%">
              <thead class=" text-primary">
              <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Nit</th>
           <th>Dueño</th>
           <th>Direccion</th>
           <th>Telefono</th>
           <th>Ciudad</th>
           <th>Acciones</th>
           
         </tr> 

        </thead>

        <tbody>
        <?php

                $item = null;
                $valor = null;

                 $negocios = ControladorNegocios::ctrMostrarNegocios($item, $valor);

                foreach ($negocios as $key => $value){
         
                  echo ' <tr>
                  <td>'.($key+1).'</td>
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["nit"].'</td>
                  <td>'.$value["dueño"].'</td>
                  <td>'.$value["direccion"].'</td>
                  <td>'.$value["telefono"].'</td>
                  <td>'.$value["ciudad"].'</td>

                  <td>
                      <div class="btn-group">
                      <button class="btn btn-warning btn-link btn-icon btn-sm btnEditarNegocio" name="btnEditarNegocio" idNegocio="'.$value["id"].'" data-toggle="modal">
                        <i class="fa fa-edit"></i>
                      </button>

                      <button class="btn btn-danger btn-link btn-icon btn-sm btnEliminarNegocio" idNegocio="'.$value["id"].'" fotoNegocio="'.$value["imagen"].'" Negocio="'.$value["nombre"].'">
                        <i class="fa fa-times"></i>
                      </button>

                      <button class="btn btn-info btn-link btn-icon btn-sm btnInformacionNegocio" idNegocio="'.$value["id"].'" fotoNegocio="'.$value["imagen"].'" Negocio="'.$value["nombre"].'">
                      Info
                      </button>
                    </div>  

                  </td>

                  </tr>
                  ';
                }
                ?>
        </tbody> 
       </table>            
          </div>
        </div>
      </div>
    </div>

    <?php

  $eliminarNegocio = new ControladorNegocios();
  $eliminarNegocio -> ctrEliminarNegocio();

?> 