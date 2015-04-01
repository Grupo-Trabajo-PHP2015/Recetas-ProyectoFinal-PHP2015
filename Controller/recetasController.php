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
require_once '../Model/ModelRecetas.php';

$id_n = "";
$TituloEdi = "";
$DescripcionEdi = "";
$PorcionesEdi = "";
$bloqueo = "";

if (isset($_GET["id"])) {

    $ids = $_GET["id"];

    $model = new Recetas();
    $model->__SET("idReceta", $ids);
    foreach ($model->Buscar() as $value) {
        $id_n = $value["idReceta"];
        $TituloEdi = $value["Titulo"];
        $DescripcionEdi = $value["Descripcion"];
        $PorcionesEdi = $value["Porciones"];
        $bloqueo = "disabled='true'";
    }
} elseif (isset($_GET['delete'])) {

    $model_e = new Recetas();
    $ideliminar = $_GET["delete"];
    $model_e->__SET("idReceta", $ideliminar);
    if ($model_e->Eliminar()) {

        $mensaje = "Se elimino";
        print "<script>alert('$mensaje')</script>";
    } else {

        $mensaje = "Error en la conexión";
        print "<script>alert('$mensaje')</script>";
    }
}

if (isset($_POST['editar'])) {

    $modelEdi = new Recetas();

    $tittle = $_POST['titulo'];
    $portions = $_POST['porciones'];
    $description = $_POST['descripcion'];

    $modelEdi->__SET('idReceta', $_GET['id']);
    $modelEdi->__SET('Titulo', $tittle);
    $modelEdi->__SET('Descripcion', $description);
    $modelEdi->__SET('Porciones', $portions);

    if ($modelEdi->Modificar()) {

        $mensaje = "Edición satisfactoriamente";
        print "<script>alert('$mensaje')</script>";
        $id_n = "";
        $TituloEdi = "";
        $DescripcionEdi = "";
        $PorcionesEdi = "";
        $bloqueo = "";
    } else {

        $mensaje = "Error en la conexión";
        print "<script>alert('$mensaje')</script>";
    }
}elseif (isset ($_POST['receta']) ) {
    
    $modelMostrar = new Recetas();
    
    $modelMostrar->__SET('idReceta',$_POST['receta']);
    
    if ( $modelMostrar->MostrarIngrediente()>0 ) {
        
        $mensaje['Mensaje'] = "Se mostrara satisfactoriamente";
    }  else {
        
        $mensaje['Mensaje'] = "Error conexion";
    }
    
     echo json_decode($mensaje);
    
}

$model = new Recetas();
$tabla = "";
foreach ($model->Mostrar()as $value) {

    $tabla .="<tr>";

    $tabla .="<td>" . $value['Titulo'] . "</td>";
    $tabla .="<td>" . $value['Descripcion'] . "</td>";
    $tabla .="<td>" . $value['Porciones'] . "</td>";
    $tabla .="<td>" . $value['Fecha_publicacion'] . "</td>";
    $tabla .="<td>" . $value['Clasificacion'] . "</td>";
    $tabla .="<td>" . $value['Nombre'] . "</td>";
    $tabla .="<td> <a href='recetasController.php?id=" . $value['idReceta'] . "' class='btn btn-primary btn-xs' role='button'> <span class='glyphicon glyphicon-pencil'></span> </a> </td>";
    $tabla .="<td> <button data-toggle='modal' data-target='#ver' id='prueba' class='btn btn-danger btn-xs' data-id='".$value['idReceta']."' type='button'>  <span class='glyphicon glyphicon-eye-open'></span> </button> </td>";
    $tabla .="</tr>";
}


include_once '../View/Recetas/recetas.php';
?>