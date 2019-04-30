<?php

require_once "conexion.php";

class ModeloNegocios{

	/*=============================================
	MOSTRAR NEGOCIOS
	=============================================*/

	static public function mdlMostrarNegocios($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	REGISTRO DE NEGOCIO
	=============================================*/
	static public function mdlIngresarNegocio($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_usuarios, nombre, descripcion, dueño, nit, tipo_regimen, numero_facturacion, numero_autorizacion, actividad_economica, dirreccion, telefono, pais, ciudad, imagen) VALUES (:id_usuarios, :nombre, :descripcion, :dueño, :nit, :tipo_regimen, :numero_facturacion, :numero_autorizacion, :actividad_economica, :dirreccion, :telefono, :pais, :ciudad, :imagen)");

		$stmt->bindParam(":id_usuarios", $datos["id_usuarios"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":dueño", $datos["dueño"], PDO::PARAM_STR);
		$stmt->bindParam(":nit", $datos["nit"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo_regimen", $datos["tipo_regimen"], PDO::PARAM_STR);
        $stmt->bindParam(":numero_facturacion", $datos["numero_facturacion"], PDO::PARAM_STR);
        $stmt->bindParam(":numero_autorizacion", $datos["numero_autorizacion"], PDO::PARAM_STR);
        $stmt->bindParam(":actividad_economica", $datos["actividad_economica"], PDO::PARAM_STR);
        $stmt->bindParam(":dirreccion", $datos["dirreccion"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
        $stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
        

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	EDITAR PRODUCTO
	=============================================*/
	static public function mdlEditarProducto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET id_usuarios = :id_usuarios, descripcion = :descripcion, dueño = :dueño, nit = :nit, tipo_regimen = :tipo_regimen, numero_facturacion = :numero_facturacion, numero_autorizacion = :numero_autorizacion, actividad_economica = :actividad_economica, dirreccion = :dirreccion, telefono = :telefono, pais = :pais, ciudad = :ciudad, imagen = :imagen WHERE nombre = :nombre");

		$stmt->bindParam(":id_usuarios", $datos["id_usuarios"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":dueño", $datos["dueño"], PDO::PARAM_STR);
		$stmt->bindParam(":nit", $datos["nit"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo_regimen", $datos["tipo_regimen"], PDO::PARAM_STR);
        $stmt->bindParam(":numero_facturacion", $datos["numero_facturacion"], PDO::PARAM_STR);
        $stmt->bindParam(":numero_autorizacion", $datos["numero_autorizacion"], PDO::PARAM_STR);
        $stmt->bindParam(":actividad_economica", $datos["actividad_economica"], PDO::PARAM_STR);
        $stmt->bindParam(":dirreccion", $datos["dirreccion"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
        $stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	BORRAR NEGOCIO
	=============================================*/

	static public function mdlEliminarProducto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR PRODUCTO
	=============================================*/

	static public function mdlActualizarProducto($tabla, $item1, $valor1, $valor){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE id = :id");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":id", $valor, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

}