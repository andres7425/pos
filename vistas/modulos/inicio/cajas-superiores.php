<?php

$item = null;
$valor = null;
$orden = "id";

$ventas = ControladorVentas::ctrSumaTotalVentas();

$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
$totalCategorias = count($categorias);

$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
$totalClientes = count($clientes);

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
$totalProductos = count($productos);

?>



<div class="col-lg-3">

  <div class="card">
    <div class="card-title">
      <h3>Ventas Netas</h3>
    </div>
    
    <div class="inner">
      
      <h3 class="text-success">$<?php echo number_format($ventas["total"],2); ?></h3>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="ventas" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

<div class="col-lg-3">
  <div class="card">
  <div class="card-title">
    <h3>Categorías</h3>
  </div>

  <div class="small-box">
    
    <div class="inner">
    
      <h3 class="text-warning"><?php echo number_format($totalCategorias); ?> categorías totales</h3>

    
    </div>
    
    <a href="categorias" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>
</div>

<div class="col-lg-3">

<div class="card">
  <div class="card-title">
    <h3>Clientes</h3>
  </div>

  <div class="small-box bg-yellow">
    
    <div class="inner">
    
      <h3 class="text-danger"><?php echo number_format($totalClientes); ?> Clientes</h3>
  
    </div>
    
    <div class="icon">
    
      <i class="ion ion-person-add"></i>
    
    </div>
    
    <a href="clientes" class="small-box-footer">

      Más info <i class="fa fa-arrow-circle-right"></i>

    </a>

  </div>
</div>

</div>

<div class="col-lg-3">
<div class="card">
  <div class="card-title">
    <h3>Productos</h3>
  </div>


  <div class="small-box bg-red">
  
    <div class="inner">
    
      <h3 class="text-info"><?php echo number_format($totalProductos); ?></h3>
    
    </div>
    
    <a href="productos" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

</div>