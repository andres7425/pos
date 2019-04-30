<body class="login">
  

  
  <div class="login-logo">

    <img src="vistas/img/plantilla/logo-blanco-bloque.png" class="img-responsive" style="padding:30px 100px 0px 100px">

  </div>

  <div class="center">

    <p class="login-box-msg">Ingresar al sistema</p>

    <form method="post">

    <div class="card">
    <div class="card-body">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-user"></i>
          </div>      
        </div>
        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
      </div>
    </div>
    <div class="card-body">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-key"></i>
          </div>      
        </div>
        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        
      </div>
  
        <div class="col-sm pull-left">

          <button type="submit" class="btn btn-default pull-left">Ingresar</button>
        
        </div>
    </div>
  </div>
  


      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>

    </form>

  </div>

</body>