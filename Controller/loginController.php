
<?php 
        require_once '../Config/Config.php';
        require_once '../Library/DataBase.php';
        require_once '../Model/UsuariosModel.php';
        

function create()
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


 if ($UsuariosModel->create()) {
    $mensaje = "Registro satisfactorio";
    print "<script>alert('$mensaje')</script>";

}elseif ($_POST['Cedula']=$Cedula) {
    print "<script>alert('Identificacion ya existe')</script>";

}else{
     print "<script>alert('Error de conexion')</script>";
}
 
}





if (isset($_POST["action"])) {
    $action = $_POST["action"];
    if ($action == "Registrar") {
        if (isset($_POST['Cedula'])!=null && isset($_POST['Nombre'])!=null && isset($_POST['Email'])!=null 
            && isset($_POST['Usuario'])!=null && isset($_POST['Password'])!=null && isset($_POST['Roles_idRol'])!=null) {
            create();
            echo '<meta http-equiv="refresh" content="1;URL=productoController.php" />';

        }else{
            $mensaje = "Llenar todos los campos por favor";
            print "<script>alert('$mensaje')</script>";
        }
            
    }
}



//     function consultar() {

//     $user = $_POST['nombre'];
//     $password = $_POST['password'];
    
//     $modelUser = new UsersModel();
    
//     return $modelUser->read();
    
// }

// if (isset($_POST["consultarBtn"])) {

//     if (consultar()) {
        
//         $mostrar = consultar();
//         $session=false;
//         foreach ( $mostrar as $value ){ 
         
//          if ( $value['user'] == $_POST['nombre'] && $value['password']== $_POST['password'] ) {
//              session_start();
//              $_SESSION['id'] = $value['id_usuario'];
//              $_SESSION['usuario'] = $value['user'];
//              $_SESSION['nombre'] = $value['nombre'];
//              $_SESSION['password'] = $value['password'];
//              $session = true;
//          }
         
//         }
        
//         if ($session) {
            
//             $mensaje = "Hola usuario ".$_SESSION['usuario'];
//             print "<script>alert('$mensaje')</script>";
//             header("location: sessionController.php");
            
//         }  else {
            
//             $mensaje = "el usuario no existe";
//             print "<script>alert('$mensaje')</script>";
//         }
        
  
//     } 
// }
//         if ( isset($_POST['session']) ) {
   
//             session_start();
//             $_SESSION['usuario']= $_POST['username'];
//             $_SESSION['contrasena']= $_POST['password'];
//             header("location: homeController.php");
// }
        
       include_once '../View/Login/login.php';
?>
	
        
       

