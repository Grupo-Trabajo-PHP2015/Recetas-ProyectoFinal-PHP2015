<?php 

session_start();

if (empty($_SESSION['Usuario'])) {
		
		session_start();
		session_destroy();
		header('location: loginController.php');
	}

if (isset($_POST['cerrar'])) {
	
	session_start();
	session_destroy();
	header('location: loginController.php');
}

include ('../View/Inicio/inicio.php');
 ?>