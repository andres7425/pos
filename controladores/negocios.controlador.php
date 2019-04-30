<?php

class ControladorNegocios{

	/*=============================================
	MOSTRAR NEGOCIOS
	=============================================*/

	static public function ctrMostrarNegocios($item, $valor){

		$tabla = "negocios";

		$respuesta = ModeloNegocios::mdlMostrarNegocios($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	CREAR NEGOCIO
	=============================================*/

	static public function ctrCrearNegocio(){

		if(isset($_POST["nuevaDescripcion"])){

		   		/*=============================================
				VALIDAR IMAGEN
				=============================================*/

			   	$ruta = "vistas/img/negocios/default/logo.png";

			   	if(isset($_FILES["nuevaImagen"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["nuevaImagen"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "vistas/img/negocios/".$_POST["nuevoNombre"];

					mkdir($directorio, 0755);

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["nuevaImagen"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/negocios/".$_POST["nuevoNombre"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevaImagen"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["nuevaImagen"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/negocios/".$_POST["nuevoNombre"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["nuevaImagen"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}

				$tabla = "negocios";

				$datos = array("id_Usuarios" => $_POST["editarUsuarios"],
							   "nombre" => $_POST["editarNombre"],
							   "descripcion" => $_POST["editarDescripcion"],
							   "dueño" => $_POST["editarDueño"],
							   "nit" => $_POST["editarNit"],
                               "tipo_regimen" => $_POST["editarTipo_Regimen"],
                               "numero_facturazion" => $_POST["editarNumero_Facturacion"],
                               "numero_autorizacion" => $_POST["editarNumero_Facturacion"],
                               "actividad_economica" => $_POST["editarActividad_Economica"],
                               "direccion" => $_POST["editarDireccion"],
                               "telefono" => $_POST["editarTelefono"],
                               "pais" => $_POST["editarPais"],
                               "ciudad" => $_POST["editarCiudad"],
							   "imagen" => $ruta);

				$respuesta = ModeloNegocios::mdlIngresarNegocio($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El negocio ha sido guardado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "negocios";

										}
									})

						</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El producto no puede ir con los campos vacíos o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "negocios";

							}
						})

			  	</script>';
			}
		}


	/*=============================================
	EDITAR NEGOCIO
	=============================================*/

	static public function ctrEditarNegocio(){

		if(isset($_POST["editarDescripcion"])){

		   		/*=============================================
				VALIDAR IMAGEN
				=============================================*/

			   	$ruta = $_POST["imagenActual"];

			   	if(isset($_FILES["editarImagen"]["tmp_name"]) && !empty($_FILES["editarImagen"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["editarImagen"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL NEGOCIO
					=============================================*/

					$directorio = "vistas/img/negocios/".$_POST["editarNombre"];

					/*=============================================
					PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
					=============================================*/

					if(!empty($_POST["imagenActual"]) && $_POST["imagenActual"] != "vistas/img/negocios/default/logo.png"){

						unlink($_POST["imagenActual"]);

					}else{

						mkdir($directorio, 0755);	
					
					}
					
					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["editarImagen"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/negocios/".$_POST["editarNombre"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["editarImagen"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["editarImagen"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/negocios/".$_POST["editarNombre"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["editarImagen"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}

				$tabla = "negocios";

				$datos = array("id_Usuarios" => $_POST["nuevaUsuarios"],
							   "nombre" => $_POST["nuevoNombre"],
							   "descripcion" => $_POST["nuevaDescripcion"],
							   "dueño" => $_POST["nuevoDueño"],
							   "nit" => $_POST["nuevoNit"],
                               "tipo_regimen" => $_POST["nuevoTipo_Regimen"],
                               "numero_facturazion" => $_POST["nuevoNumero_Facturacion"],
                               "numero_autorizacion" => $_POST["nuevoNumero_Facturacion"],
                               "actividad_economica" => $_POST["nuevaActividad_Economica"],
                               "direccion" => $_POST["nuevaDireccion"],
                               "telefono" => $_POST["nuevoTelefono"],
                               "pais" => $_POST["nuevoPais"],
                               "ciudad" => $_POST["nuevaCiudad"],
							   "imagen" => $ruta);

				$respuesta = ModeloNegocios::mdlEditarNegocio($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El negocio ha sido editado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "negocios";

										}
									})

						</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El negocio no puede ir con los campos vacíos o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "negocios";

							}
						})

			  	</script>';
			}
		}

	

	/*=============================================
	BORRAR PRODUCTO
	=============================================*/
	static public function ctrEliminarNegocio(){

		if(isset($_GET["idNegocio"])){

			$tabla ="negocios";
			$datos = $_GET["idProducto"];

			if($_GET["imagen"] != "" && $_GET["imagen"] != "vistas/img/negocios/default/anonymous.png"){

				unlink($_GET["imagen"]);
				rmdir('vistas/img/negocios/'.$_GET["Nombre"]);

			}

			$respuesta = Modelonegocios::mdlEliminarProducto($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El producto ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "negocios";

								}
							})

				</script>';

			}		
		}
	}
}