<div class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="card ">
        <div class="card-header">
          <h1 class="card-title">Administar categorías</h1>
          <a href="crear-categoria">
          <button class="btn btn-default btnCrearCategoria" id="crearCateoria" data-toggle="modal" data-taget="#modalAgregarCategoria">Agregar categoria</button>
          </a>
          
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter dt-responsive tablas" id="">
              <thead class=" text-primary">
              <tr>
           
           <th style="width:10px">#</th>
           <th>Categoria</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

          foreach ($categorias as $key => $value) {
           
            echo ' <tr>

                    <td>'.($key+1).'</td>

                    <td class="text-uppercase">'.$value["categoria"].'</td>

                    <td>

                      <div class="btn-group">
                        
                        <button class="btn btn-warning btn-link  btnEditarCategoria" name="btnEditarCategoria" idCategoria="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarCategoria">
                        <i class="fa fa-edit"></i>
                        </button>';

                        if($_SESSION["perfil"] == "Administrador") {

                        echo'<button class="btn btn-danger btn-link btnEliminarCategoria" name="btnEliminarCategoria" idCategoria="'.$value["id"].'">
                        <i class="fa fa-times"></i>
                        </button>';}

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