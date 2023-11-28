<?php 
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_POST['Btn_action'])) {
			# code...
			require_once '../Model/crud.class.php';
			$Obuser = new Amu();
			$Crud = new Crud($Obuser);
			$usuario = array();
			$auxArray = array();
			switch ($_POST['Btn_action']) {
				case 'Registro':
					foreach ($_POST as $key => $dato) {
						$usuario[$key] = explode(" ", htmlentities($dato." "));
						if ($key == "nombre" || $key == "apellido") {
							#validamos si el campo de texto tiene un espacio
							$posAux = (strripos($dato,  " ")) ? true : false;
							$auxArray[$key] = explode(" ", htmlentities($dato." "));
							//----------------------------------------------
							if ($posAux === false) {
								$auxArray[$key] = explode(" ", htmlentities($dato." "));
								if ($auxArray[$key][0] == null){
								unset($auxArray[$key][0]);
								$usuario[$key] = array_values($auxArray[$key]);
								}
							} else if ($auxArray[$key][0] == null){
								$auxArray[$key] = explode(" ", htmlentities($dato));
								unset($auxArray[$key][0]);
								$usuario[$key] = array_values($auxArray[$key]);
							}
						} else {
							$usuario[$key] = htmlentities($dato);
						}
					}
					$Crud->setCreate($usuario);
					if ($Crud->getCreate() == true) {
						header("Location: ../View/registrate.html?notificacion=true",TRUE,301);
					} else {
						header("Location: ../View/registrate.html?notificacion=false",TRUE,301);
					}
					
					break;
				case 'Read':
					# code...
					break;
				case 'Update':
					# code...
					break;
				case 'Delete':
					# code...
					break;
				default:
					# code...
					print("No tienes permisos!! [Error!!....]");
					break;
			}
		} else {
			# code...
			echo "[Error!!!!!!]";
		}
		
	} else {
		# code...
		header("Location: ../View",TRUE,301);
	}
	
 ?>