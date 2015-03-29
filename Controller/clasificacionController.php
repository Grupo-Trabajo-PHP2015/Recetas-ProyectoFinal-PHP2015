<?php

require_once '../Config/Config.php';
require_once '../Library/DataBase.php';
require_once '../Model/ModelClasificacion.php';

$id_n = "";
$clasificacionEdi = "";
$bloqueo="";

if (isset($_GET["id"])) {

    $ids = $_GET["id"];

    $model = new Clasificacion();
    $model->__SET("idClasificacion", $ids);
    foreach ($model->Buscar() as $value) {
        $id_n = $value["idClasificacion"];
        $clasificacionEdi = $value["Clasificacion"];
        $bloqueo = "disabled='true'";
    }
} elseif (isset($_GET['delete'])) {

    $model_e = new Clasificacion();
    $ideliminar = $_GET["delete"];
    $model_e->__SET("idClasificacion", $ideliminar);
    if ($model_e->Eliminar()) {

        $mensaje = "Se elimino";
        print "<script>alert('$mensaje')</script>";
    } else {

        $mensaje = "Error en la conexión";
        print "<script>alert('$mensaje')</script>";
    }
}

if ( isset( $_POST['guardar'] ) ) {
    
    $id = "";
        $model_g = new Clasificacion();

        $model_g->__SET('idClasificacion', $id);
        $model_g->__SET('Clasificacion', $_POST['nombre']);
        
        if ($model_g->Guardar()) {

            $mensaje = "Se guardo Satisfactoriamente";
            print "<script>alert('$mensaje')</script>";
        } else {

            $mensaje = "Error en la conexión";
            print "<script>alert('$mensaje')</script>";
        }
    
}elseif (isset ( $_POST['editar'] ) ) {
    
    $model_m = new Clasificacion();
    $model_m->__SET('idClasificacion', $_GET['id']);
    $model_m->__SET('Clasificacion', $_POST['nombre']);

    if ($model_m->Modificar()) {
        $id_n = "";
        $clasificacionEdi = "";
        $bloqueo = "";
        $mensaje = "Se modifico";
        print "<script>alert('$mensaje')</script>";
    } else {

        $mensaje = "Error en la conexión";
        print "<script>alert('$mensaje')</script>";
    }
    
    
}


$model = new Clasificacion();
$tabla = "";
foreach ($model->Listar()as $value) {

    $tabla .="<tr>";

    $tabla .="<td>" . $value['idClasificacion'] . "</td>";
    $tabla .="<td>" . $value['Clasificacion'] . "</td>";
    $tabla .="<td> <a href='clasificacionController.php?id=" . $value['idClasificacion'] . "'  class='btn btn-primary btn-xs' role='button'> <span class='glyphicon glyphicon-pencil'></span> </a> </td>";
    $tabla .="<td> <a href='clasificacionController.php?delete=" . $value['idClasificacion'] . "' class='btn btn-danger btn-xs' role='button'>  <span class='glyphicon glyphicon-trash'></span> </a> </td>";
    $tabla .="</tr>";
}

include_once '../View/Clasificacion/clasificacion.php';

?>
