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
    $Roles_idRol=$_POST['Roles_idRol'];

    $UsuariosModel = new UsuariosModel();

    $UsuariosModel->__SET($Cedula,"Cedula");
    $UsuariosModel->__SET($Nombre,"Nombre");
    $UsuariosModel->__SET($Email,"Email");
    $UsuariosModel->__SET($Usuario,"Usuario");
    $UsuariosModel->__SET($Password,"Password");
    $UsuariosModel->__SET($Roles_idRol,"Roles_idRol");

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
            && isset($_POST['Usuario'])!=null && isset($_POST['Password'])!=null && isset($_POST['Roles_idRol'])!=null  ) {
            update();
            echo '<meta http-equiv="refresh" content="1;URL=usuariosController.php" />';

        }else{
            $mensaje = "Llenar todos los campos por favor";
            print "<script>alert('$mensaje')</script>";
        }
    }      
} 
        $Cedula= "";
        $Nombre = "";
        $Email = "";
        $Usuario = "";
        $Password = "";
        $Roles_idRol ="";
        $Rol ="";

    if (isset($_GET["editar"])) {

    $ids = $_GET["editar"];

    $UsuariosModel = new UsuariosModel();
    $UsuariosModel->__SET("Cedula", $ids);
        
    foreach ($UsuariosModel->find() as $value) {
        $Cedula= $value["Cedula"];
        $Nombre = $value["Nombre"];
        $Email = $value["Email"];
        $Usuario = $value["Usuario"];
        $Password = $value["Password"];
        $Roles_idRol = $value["Roles_idRol"];
        $Rol = $value["Rol"];
        $bloqueo = "disabled='true'";
    }

} elseif (isset($_GET['delete'])) {

    $UsuariosModel = new UsuariosModel();
    $ideliminar = $_GET["delete"];
    $UsuariosModel->__SET("Cedula", $ideliminar);
    if ($UsuariosModel->delete()) {

        $mensaje = "Se elimino";
        print "<script>alert('$mensaje')</script>";
    } else {

        $mensaje = "Error en la conexión";
        print "<script>alert('$mensaje')</script>";
    }
}

    $UsuariosModel = new UsuariosModel();
    $tabla = "";
    foreach ($UsuariosModel->read()as $value) {

        $tabla .="<tr>";

        $tabla .="<td>" . $value['Cedula'] . "</td>";
        $tabla .="<td>" . $value['Nombre'] . "</td>";
        $tabla .="<td>" . $value['Email'] . "</td>";
        $tabla .="<td>" . $value['Usuario'] . "</td>";
        $tabla .="<td>" . $value['Password'] . "</td>";
        $tabla .="<td>" . $value['Rol'] . "</td>";
        $tabla .="<td> <a href='usuariosController.php?editar=" . $value['Cedula'] . "'  class='btn btn-primary btn-xs' role='button'> <span class='glyphicon glyphicon-pencil'></span> </a> </td>";
        $tabla .="<td> <a href='usuariosController.php?delete=" . $value['Cedula'] . "' class='btn btn-danger btn-xs' role='button'>  <span class='glyphicon glyphicon-trash'></span> </a> </td>";
        $tabla .="</tr>";
    }

    $UsuariosModel = new UsuariosModel();
    $selecte = "";
    foreach ($UsuariosModel->read2()as $value) {
        $selecte.='<option value="'.$value['idRol'].'">'.$value['Rol'].'</option>';
          }
    

include ('../View/Usuarios/usuarios.php');
 ?>