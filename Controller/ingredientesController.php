<?php

require_once '../Config/Config.php';
require_once '../Library/DataBase.php';
require_once '../Model/ModelIngredientes.php';

$id_n = "";
$nombre = "";
$url = "";
$descripcion2 = "";
$bloqueo = "";

if (isset($_GET["id"])) {

    $ids = $_GET["id"];

    $model = new Ingredientes();
    $model->__SET("idIngrediente", $ids);
    foreach ($model->Buscar() as $value) {
        $id_n = $value["idIngrediente"];
        $nombre = $value["Nombre"];
        $descripcion2 = $value["Desripcion"];
        $url = $value['Url'];
        $bloqueo = "disabled='true'";
    }
} elseif (isset($_GET['delete'])) {

    $model_e = new Ingredientes();
    $ids = $_GET["delete"];
    $model_e->__SET("idIngrediente", $ids);
    if ($model_e->Eliminar()) {

        $mensaje = "Se elimino";
        print "<script>alert('$mensaje')</script>";
    } else {

        $mensaje = "Error en la conexión";
        print "<script>alert('$mensaje')</script>";
    }
}

if (isset($_POST['guardar'])) {

    $archivo = $_FILES["archivo"]["tmp_name"];

    $destino = "../Archivos/" . $_FILES["archivo"]["name"];


    if ($_FILES["archivo"]["type"] == "image/png" || $_FILES["archivo"]["type"] == "image/jpeg" || $_FILES["archivo"]["type"] == "image/jpg") {

        $id = rand(1, 200);
        $model_g = new Ingredientes();

        $model_g->__SET('idIngrediente', $id);
        $model_g->__SET('Nombre', $_POST['nombre']);
        $model_g->__SET('Desripcion', $_POST['descripcion']);
        $model_g->__SET('Url', $destino);
        $model_g->__SET('Tipo', $_POST['clasificacion']);
        if ($model_g->Guardar()) {

            move_uploaded_file($archivo, $destino);
            $mensaje = "Se guardo Satisfactoriamente";
            print "<script>alert('$mensaje')</script>";
        } else {

            $mensaje = "Error en la conexión";
            print "<script>alert('$mensaje')</script>";
        }
    } else {

        echo "Error al guardar \n Solo se pueden imagenes con extención JPEG , PNG , JPG";
    }
} elseif (isset($_POST['editar'])) {

    $model_m = new Ingredientes();
    $model_m->__SET('idIngrediente', $_GET['id']);
    $model_m->__SET('Nombre', $_POST['nombre']);
    $model_m->__SET('Desripcion', $_POST['descripcion2']);

    if ($model_m->Modificar()) {
        $id_n = "";
        $nombre = "";
        $url = "";
        $descripcion2 = "";
        $bloqueo = "";
        $mensaje = "Se modifico";
        print "<script>alert('$mensaje')</script>";
    } else {

        $mensaje = "Error en la conexión";
        print "<script>alert('$mensaje')</script>";
    }
}

$model = new Ingredientes();
$tabla = "";
foreach ($model->Listar() as $value) {

    $tabla .="<tr>";

    $tabla .="<td>" . $value['Nombre'] . "</td>";
    $tabla .="<td>" . $value['Desripcion'] . "</td>";
    $tabla .="<td>" . $value['Url'] . "</td>";
    $tabla .="<td> <a href='ingredientesController.php?id=" . $value['idIngrediente'] . "'  class='btn btn-primary btn-xs' role='button'> <span class='glyphicon glyphicon-pencil'></span> </a> </td>";
    $tabla .="<td> <a href='ingredientesController.php?delete=" . $value['idIngrediente'] . "' class='btn btn-danger btn-xs' role='button'>  <span class='glyphicon glyphicon-trash'></span> </a> </td>";
    //$tabla .="<td> <img src='".$value['url de la imagen']."'   width='150' heigth='150'> </td>";
    $tabla .="</tr>";
}



include_once "../View/Ingredientes/ingredientes.php";
?>