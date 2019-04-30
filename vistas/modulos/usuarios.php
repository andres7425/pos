<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header">
          <h1 class="card-title">Administar Usuarios</h1>
          <a href="crear-usuario">
          <button class="btn btn-default btnCrearUsuario" data-toggle="modal" data-taget="#modalAgregarUsuario">Agregar usuario</button>
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter dt-responsive tablas" name="tablas" id="">
              <thead class=" text-primary">
                <tr>

                  <th style="width:10px">#</th>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Foto</th>
                  <th>Perfil</th>
                  <th>Estado</th>
                  <th>Último login</th>
                  <th>Acciones</th>

                </tr>
              </thead>
              <tbody>
                <?php

                $item = null;
                $valor = null;

                 $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

                foreach ($usuarios as $key => $value){
         
                  echo ' <tr>
                  <td>'.($key+1).'</td>
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["usuario"].'</td>';

                  if($value["foto"] != ""){

                    echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="40px"></td>';

                  }else{

                    echo '<td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>';

                  }

                  echo '<td>'.$value["perfil"].'</td>';

                  if($value["estado"] != 0){

                    echo '<td><button class="btn btn-success btn-sm btn-simple btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';

                          }else{

                            echo '<td><button class="btn btn-danger btn-sm btn-simple btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';

                          }             

                          echo '<td>'.$value["ultimo_login"].'</td>
                          <td>

                            <div class="btn-group">

                            <button class="btn btn-warning btn-link btn-icon btn-sm btnEditarUsuario" name="btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario">
                              <i class="fa fa-edit"></i>
                            </button>

                            <button class="btn btn-danger btn-link btn-icon btn-sm btnEliminarUsuario" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'">
                              <i class="fa fa-times"></i>
                            </button>
                            </div>  

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

    $borrarUsuario = new ControladorUsuarios();
    $borrarUsuario -> ctrBorrarUsuario();

?> 