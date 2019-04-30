<?php

require_once "../controladores/negocios.controlador.php";
require_once "../modelos/negocios.modelo.php";

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";


class TablaNegocios{

 	/*=============================================
 	 MOSTRAR LA TABLA DE NEGOCIOS
  	=============================================*/ 

	public function mostrarTablaNegocios(){

		$item = null;
    	$valor = null;

  		$negocios = ControladorNegocios::ctrMostrarNegocios($item, $valor);	

  		if(count($negocios) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($negocios); $i++){

		  	/*=============================================
 	 		TRAEMOS LA IMAGEN
  			=============================================*/ 

		  	$imagen = "<img src='".$negocios[$i]["imagen"]."' width='40px'>";

		  	/*=============================================
 	 		TRAEMOS LOS USUARIOS
  			=============================================*/ 

		  	$item = "id";
		  	$valor = $negocios[$i]["id_usuarios"];

		  	$usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

		  	/*=============================================
 	 		TRAEMOS LAS ACCIONES
			  =============================================*/ 
			  
			$botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarNegocio btn-link' idNegocio='".$negocios[$i]["id"]."' data-toggle='modal' data-target='#modalEditarNegocio'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-link btnEliminarNegocio' idNegocio='".$negocios[$i]["id"]."' codigo='".$negocios[$i]["codigo"]."' imagen='".$negocios[$i]["imagen"]."'><i class='fa fa-times'></i></button></div>"; 
		 
		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$imagen.'",
			      "'.$negocios[$i]["nombre"].'",
			      "'.$negocios[$i]["nit"].'",
			      "'.$negocios["dueño"].'",
			      "'.$negocios["direccion"].'",
			      "'.$negocios["telefono"].'",
				  "'.$negocios["ciudad"].'",
			      "'.$botones.'"
			    ],';

		  }

		  $datosJson = substr($datosJson, 0, -1);

		 $datosJson .=   '] 

		 }';
		
		echo $datosJson;


	}


}


