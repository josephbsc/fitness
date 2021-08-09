<?php

class ControladorActividad
{

	/*=============================================
	CREAR CLIENTES
	=============================================*/

	static public function ctrCrearActividad()
	{

		if (isset($_POST["nombre"])) {

			$tabla = "tbl_reservation";
			
			$datos = array(
				
				"estatura"			=> $_POST["estatura"],
				"peso"				=> $_POST["peso"],
		
			);

			if ($_POST["estatura"]<= 160) 
			
			{
				"comments"			=> $_POST["nombre"],
				"rdate"			=> $_POST["apellido"],
				"uid"			=> $_POST["cedula"],
				"email"				=> $_POST["correo"],
				"estatura"			=> $_POST["estatura"],
				"peso"				=> $_POST["peso"],
				"enfermedades"		=> $_POST["enfermedades"],
				"sangre"			=> $_POST["sangre"],
				"civil"				=> $_POST["civil"],
				"dias_deporte"		=> $_POST["deporte"],
				"covid"				=> $_POST["covid"],
				"dosis"				=> $_POST["dosis"],
				"cirugias"			=> $_POST["cirugias"],
				"discapacidad"		=> $_POST["discapacidad"],
				"usuario"			=> $_POST["usuario"],
				"password"			=> $encriptar,
				"perfil"			=> "Administrador",
				"estado"			=> "1",
				"fecha_nacimiento"	=> $_POST["fechaNacimiento"]
			}

			$respuesta = ModeloClientesFitness::mdlIngresarClienteFitness($tabla, $datos);

			if ($respuesta == "ok") {

				echo '<script>

					swal({
						  type: "success",
						  title: "El usuario ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "login";

									}
								})

					</script>';
			}
		}
	}

	/*=============================================
	MOSTRAR CLIENTES
	=============================================*/

	static public function ctrMostrarClientes($item, $valor)
	{

		$tabla = "clientes";

		$respuesta = ModeloClientes::mdlMostrarClientes($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	EDITAR CLIENTE
	=============================================*/

	static public function ctrEditarCliente()
	{

		if (isset($_POST["editarCliente"])) {

			if (
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCliente"]) &&
				preg_match('/^[0-9]+$/', $_POST["editarDocumentoId"]) &&
				preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["editarEmail"]) &&
				preg_match('/^[()\-0-9 ]+$/', $_POST["editarTelefono"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ# ]+$/', $_POST["editarDireccion"])
			) {

				$tabla = "clientes";

				$datos = array(
					"id" => $_POST["idCliente"],
					"nombre" => $_POST["editarCliente"],
					"documento" => $_POST["editarDocumentoId"],
					"email" => $_POST["editarEmail"],
					"telefono" => $_POST["editarTelefono"],
					"direccion" => $_POST["editarDireccion"],
					"fecha_nacimiento" => $_POST["editarFechaNacimiento"]
				);

				$respuesta = ModeloClientes::mdlEditarCliente($tabla, $datos);

				if ($respuesta == "ok") {

					echo '<script>

					swal({
						  type: "success",
						  title: "El cliente ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "clientes";

									}
								})

					</script>';
				}
			} else {

				echo '<script>

					swal({
						  type: "error",
						  title: "¡El cliente no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "clientes";

							}
						})

			  	</script>';
			}
		}
	}

	/*=============================================
	ELIMINAR CLIENTE
	=============================================*/

	static public function ctrEliminarCliente()
	{

		if (isset($_GET["idCliente"])) {

			$tabla = "clientes";
			$datos = $_GET["idCliente"];

			$respuesta = ModeloClientes::mdlEliminarCliente($tabla, $datos);

			if ($respuesta == "ok") {

				echo '<script>

				swal({
					  type: "success",
					  title: "El cliente ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result){
								if (result.value) {

								window.location = "clientes";

								}
							})

				</script>';
			}
		}
	}
}
