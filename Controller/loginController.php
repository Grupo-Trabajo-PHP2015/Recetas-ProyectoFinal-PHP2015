<?php 

	include_once '../View/Login/login.php';
        
        if ( isset($_POST['session']) ) {
   
            session_start();
            $_SESSION['usuario']= $_POST['username'];
            $_SESSION['contrasena']= $_POST['password'];
            header("location: homeController.php");
}

 ?>