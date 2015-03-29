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

    require_once '../Config/Config.php';
    require_once '../Library/DataBase.php';
    require_once '../Model/UsuariosModel.php';


    function update()
{
    $Cedula=$_POST['Cedula'];
    $Nombre=$_POST['Nombre'];
    $Email=$_POST['Email'];
    $Usuario=$_POST['Usuario'];
    $Password=$_POST['Password'];


    $UsuariosModel = new UsuariosModel();

    $UsuariosModel->__SET($Cedula,"Cedula");
    $UsuariosModel->__SET($Nombre,"Nombre");
    $UsuariosModel->__SET($Email,"Email");
    $UsuariosModel->__SET($Usuario,"Usuario");
    $UsuariosModel->__SET($Password,"Password");


 if ($UsuariosModel->update()) {
    $mensaje = "Modificacion satisfactoria";
    print "<script>alert('$mensaje')</script>";

}else{
     print "<script>alert('Error de conexion')</script>";
}
 

	
}




if (isset($_POST["action"])) {
    $action = $_POST["action"];
    if ($action == "Modificar") {
        if (isset($_POST['Cedula'])!=null && isset($_POST['Nombre'])!=null && isset($_POST['Email'])!=null 
            && isset($_POST['Usuario'])!=null && isset($_POST['Password'])!=null ) {
            update();
        	echo '<meta http-equiv="refresh" content="1;URL=perfilController.php" />';

        }else{
            $mensaje = "Llenar todos los campos por favor";
            print "<script>alert('$mensaje')</script>";
        }
    }      
} 

include ('../View/Perfil/perfil.php');
 ?>