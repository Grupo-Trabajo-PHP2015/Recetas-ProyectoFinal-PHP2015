<?php 


        require_once '../Config/Config.php';
        require_once '../Library/DataBase.php';
        require_once '../Model/UsuariosModel.php';

function consultar() {
    $Usuario = $_POST['Usuario'];
    $Password = $_POST['Password'];
    $UsuariosModel = new UsuariosModel();
    return $UsuariosModel->read();           
}

if (isset($_POST["session"])) {
    if (consultar()) {
        $mostrar = consultar();
        $session=false;

        $Modulo = array(
            array(
               "Rol"=>"Administrador", 
               "Url"=>"<ul class='nav navbar-nav'>
                                <li><a href='inicioController.php'><img id='img1' class='img-responsive' src='../Assets/img/logo.png'></a></li>
                                <li><a href='ingredientesController.php'>Ingredientes</a></li>
                                <li><a href='recetasController.php'>Recetas</a></li>
                                <li><a href='usuariosController.php'>Usuarios</a></li>
                            </ul>
            
                            "
            ),
            array(
                "Rol"=>"Usuario",
                "Url"=>"<ul class='nav navbar-nav'>
                                <li><a href='inicioController.php'><img id='img1' class='img-responsive' src='../Assets/img/logo.png'></a></li>
                                
                            </ul>
            
                            "
                        
            ),
    
        );

        foreach ( $mostrar as $value ){ 
            if ( $value['Usuario'] == $_POST['Usuario'] && $value['Password']== $_POST['Password'] ) {
                 session_start();
                 $_SESSION['Cedula'] = $value['Cedula'];
                 $_SESSION['Nombre'] = $value['Nombre'];
                 $_SESSION['Email'] = $value['Email'];
                 $_SESSION['Usuario'] = $value['Usuario'];
                 $_SESSION['Password'] = $value['Password'];
                 $_SESSION['Roles_idRol'] = $value['Roles_idRol'];

                 $session = true;
                if ($value['Roles_idRol']==1) {
                    $_SESSION['menu'] = $Modulo[1]['Url'];
                    $_SESSION['Rol'] = $Modulo[1]['Rol'];
                }elseif($value['Roles_idRol']==2){
                    $_SESSION['menu'] = $Modulo[0]['Url'];
                    $_SESSION['Rol'] = $Modulo[0]['Rol'];
                };
             }
         
        }
        
        if ($session) {
            
            $mensaje = "Hola usuario ".$_SESSION['usuario'];
            print "<script>alert('$mensaje')</script>";
            header("location: inicioController.php");
            
        }  else {
            
            $mensaje = "el usuario no existe";
            print "<script>alert('$mensaje')</script>";
        }
        
  
    } 
}        

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
              if (consultar()) {
        $mostrar = consultar();
        $session=false;

        $Modulo = array(
            array(
               "Rol"=>"Administrador", 
               "Url"=>"<ul class='nav navbar-nav'>
                                <li><a href='inicioController.php'><img id='img1' class='img-responsive' src='../Assets/img/logo.png'></a></li>
                            
                                <li><a href='ingredientesController.php'>Ingredientes</a></li>
                                
                            </ul>
            
                            "
            ),
            array(
                "Rol"=>"Usuario",
                "Url"=>"<ul class='nav navbar-nav'>
                                <li><a href='inicioController.php'><img id='img1' class='img-responsive' src='../Assets/img/logo.png'></a></li>
                                
                            </ul>
            
                            "
                        
            ),
    
        );

        foreach ( $mostrar as $value ){ 
            if ( $value['Usuario'] == $_POST['Usuario'] && $value['Password']== $_POST['Password'] ) {
                 session_start();
                 $_SESSION['Cedula'] = $value['Cedula'];
                 $_SESSION['Nombre'] = $value['Nombre'];
                 $_SESSION['Email'] = $value['Email'];
                 $_SESSION['Usuario'] = $value['Usuario'];
                 $_SESSION['Password'] = $value['Password'];
                 $_SESSION['Roles_idRol'] = $value['Roles_idRol'];

                 $session = true;
                if ($value['Roles_idRol']==1) {
                    $_SESSION['menu'] = $Modulo[1]['Url'];
                    $_SESSION['Rol'] = $Modulo[1]['Rol'];
                }elseif($value['Roles_idRol']==2){
                    $_SESSION['menu'] = $Modulo[0]['Url'];
                    $_SESSION['Rol'] = $Modulo[0]['Rol'];
                };
             }
         
        }
        
        if ($session) {
            
            $mensaje = "Hola usuario ".$_SESSION['usuario'];
            print "<script>alert('$mensaje')</script>";
            header("location: inicioController.php");
            
        }  else {
            
            $mensaje = "el usuario no existe";
            print "<script>alert('$mensaje')</script>";
        }
        
  
    } 

        }else{
            $mensaje = "Llenar todos los campos por favor";
            print "<script>alert('$mensaje')</script>";
        }
            
    }
}       
       include_once '../View/Login/login.php';
?>
	
        
       

