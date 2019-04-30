<?php

require_once "../controladores/negocios.controlador.php";
require_once "../modelos/negocios.modelo.php";

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";

class AjaxNegocios{

  /*=============================================
  GENERAR CÓDIGO A PARTIR DE ID USUARIO
  =============================================*/
  public $idUsuario;

  public function ajaxCrearCodigoNegocio(){

  	$item = "id_usuarios";
  	$valor = $this->idUsuario;
    $orden = "id";

  	$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

  	echo json_encode($respuesta);

  }


  /*=============================================
  EDITAR NEGOCIO
  =============================================*/ 

  public $idNegocio;
  public $traerNegocios;
  public $nombreNegocio;

  public function ajaxEditarNegocio(){

    if($this->traerNegocios == "ok"){

      $item = null;
      $valor = null;

      $respuesta = ControladorNegocios::ctrMostrarNegocios($item, $valor);

      echo json_encode($respuesta);


    }else if($this->nombreNegocio != ""){

      $item = "descripcion";
      $valor = $this->nombreNegocio;

      $respuesta = ControladorNegocios::ctrMostrarNegocios($item, $valor);

      echo json_encode($respuesta);

    }else{

      $item = "id";
      $valor = $this->idNegocio;

      $respuesta = ControladorNegocios::ctrMostrarNegocios($item, $valor);

      echo json_encode($respuesta);

    }

  }

}

/*=============================================
GENERAR CÓDIGO A PARTIR DE ID USUARIO
=============================================*/	

if(isset($_POST["idUsuario"])){

	$codigoProducto = new AjaxProductos();
	$codigoProducto -> idUsuario = $_POST["idUsuario"];
	$codigoProducto -> ajaxCrearCodigoProducto();

}
/*=============================================
EDITAR NEGOCIO
=============================================*/ 

if(isset($_POST["idNegocio"])){

  $editarNegocio = new AjaxNegocios();
  $editarNegocio -> idNegocio = $_POST["idNegocio"];
  $editarNegocio -> ajaxEditarNegocio();

}

/*=============================================
TRAER NEGOCIO
=============================================*/ 

if(isset($_POST["traerNegocios"])){

  $traerNegocios = new AjaxNegocios();
  $traerNegocios -> traerNegocios = $_POST["traerNegocios"];
  $traerNegocios -> ajaxEditarNegocio();

}

/*=============================================
TRAER NEGOCIO
=============================================*/ 

if(isset($_POST["nombreNegocio"])){

  $traerNegocios = new AjaxNegocios();
  $traerNegocios -> nombreNegocio = $_POST["nombreNegocio"];
  $traerNegocios -> ajaxEditarNegocio();

}

