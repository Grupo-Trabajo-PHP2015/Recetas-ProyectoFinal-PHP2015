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
    $tabla .="<td> <a href='recetasController.php?id=" . $value['idReceta'] . "'  class='btn btn-primary btn-xs' role='button'> <span class='glyphicon glyphicon-pencil'></span> </a> </td>";
    $tabla .="<td> <a href='recetasController.php?delete=" . $value['idReceta'] . "' class='btn btn-danger btn-xs' role='button'>  <span class='glyphicon glyphicon-eye-open'></span> </a> </td>";
    $tabla .="</tr>";
}


include_once '../View/Recetas/recetas.php';
?>