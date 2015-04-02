<?php 


        require_once '../Config/Config.php';
        require_once '../Library/DataBase.php';
        require_once '../Model/UsuariosModel.php';

function consultar() {
    $Usuario = $_POST['Usuario'];
    $Password = $_POST['Password'];
    $UsuariosModel = new UsuariosModel();
    return $UsuariosModel->read3();           
}

if (isset($_POST["session"])) {
    if (consultar()) {
        $mostrar = consultar();
        $session=false;

        $Modulo = array(
            array( 
               "Url"=>"<ul class='nav navbar-nav'>
                                <li><a href='inicioController.php'><img id='img1' class='img-responsive' src='../Assets/img/logo.png'></a></li>
                                <li class='dropdown'>
                                <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Ingredientes <span class='caret'></span></a>
                                    <ul class='dropdown-menu' role='menu'>
                                            <li><a href='ingredientesController.php'>Gestionar ingredientes</a></li>
                                            <li><a href='tipoController.php'>Tipos de ingredientes</a></li>
                                            <li class='divider'></li>
                                    </ul>
                                </li>
                                <li class='dropdown'>
                                <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Recetas <span class='caret'></span></a>
                                    <ul class='dropdown-menu' role='menu'>
                                            <li><a href='recetasController.php'>Gestionar mis recetas</a></li>
                                            <li><a href='recetasController.php'>Ver todas las recetas</a></li>
                                            <li><a href='nuevasRecetaController.php'>Agregar recetas</a></li>
                                            <li class='divider'></li>
                                    </ul>
                                </li>
                                <li><a href='ClasificacionController.php'>Clasificacion</a></li>
                                <li><a href='usuariosController.php'>Usuarios</a></li>
                        </ul>
            
                            "
            ),
            array(
                "Url"=>"<ul class='nav navbar-nav'>
                                <li><a href='inicioController.php'><img id='img1' class='img-responsive' src='../Assets/img/logo.png'></a></li>
                                <li><a href='recetasController.php'>Gestionar mis recetas</a></li>
                                <li><a href='recetasController.php'>Ver todas las recetas</a></li>
                                <li><a href='nuevasRecetaController.php'>Agregar recetas</a></li>
                                <li><a href='ingredientesController.php'>Ver ingredientes disponibles</a></li>
                                <li><a href='clasificacionController.php'>Clasificaciones disponibles</a></li>
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
                 $_SESSION['idRol'] = $value['idRol'];
                 $_SESSION['Rol'] = $value['Rol'];

                 $session = true;
                if ($value['idRol']==1) {
                    $_SESSION['menu'] = $Modulo[1]['Url'];
                }elseif($value['idRol']==2){
                    $_SESSION['menu'] = $Modulo[0]['Url'];
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

try {

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
               "Url"=>"<ul class='nav navbar-nav'>
                                <li><a href='inicioController.php'><img id='img1' class='img-responsive' src='../Assets/img/logo.png'></a></li>
                                <li class='dropdown'>
                                <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Ingredientes <span class='caret'></span></a>
                                    <ul class='dropdown-menu' role='menu'>
                                            <li><a href='ingredientesController.php'>Gestionar ingredientes</a></li>
                                            <li><a href='tipoController.php'>Tipos de ingredientes</a></li>
                                            <li class='divider'></li>
                                    </ul>
                                </li>
                                <li class='dropdown'>
                                <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Recetas <span class='caret'></span></a>
                                    <ul class='dropdown-menu' role='menu'>
                                            <li><a href='recetasController.php'>Gestionar mis recetas</a></li>
                                            <li><a href='recetasController.php'>Ver todas las recetas</a></li>
                                            <li><a href='nuevasRecetaController.php'>Agregar recetas</a></li>
                                            <li class='divider'></li>
                                    </ul>
                                </li>
                                <li><a href='ClasificacionController.php'>Clasificacion</a></li>
                                <li><a href='usuariosController.php'>Usuarios</a></li>
                        </ul>
            
                            "
            ),
            array(
                "Url"=>"<ul class='nav navbar-nav'>
                                <li><a href='inicioController.php'><img id='img1' class='img-responsive' src='../Assets/img/logo.png'></a></li>
                                <li><a href='recetasController.php'>Gestionar mis recetas</a></li>
                                <li><a href='recetasController.php'>Ver todas las recetas</a></li>
                                <li><a href='nuevasRecetaController.php'>Agregar recetas</a></li>
                                <li><a href='recetasController.php'>Ver ingredientes disponibles</a></li>
                                <li><a href='nuevasRecetaController.php'>Clasificaciones disponibles</a></li>
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
                 $_SESSION['idRol'] = $value['idRol'];
                 $_SESSION['Rol'] = $value['Rol'];

                 $session = true;
                if ($value['idRol']==1) {
                    $_SESSION['menu'] = $Modulo[1]['Url'];
                }elseif($value['idRol']==2){
                    $_SESSION['menu'] = $Modulo[0]['Url'];
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
} catch(PDOException $e){

   die("Error el documento ya existe en la base de datos (Verifique su conexion esta puede ser otra causa del error) <a href='loginController.php'>Volver</a>");
}      
       include_once '../View/Login/login.php';
?>
	
        
       

