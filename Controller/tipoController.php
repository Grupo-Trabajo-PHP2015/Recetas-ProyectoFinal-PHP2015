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
require_once '../Model/ModelTipoIngrediente.php';

$id_n = "";
$clasificacionEdi = "";
$bloqueo="";

if (isset($_GET["id"])) {

    $ids = $_GET["id"];

    $model = new TipoIngrediente();
    $model->__SET("idTipo_ingrediente", $ids);
    foreach ($model->Buscar() as $value) {
        $id_n = $value["idTipo_ingrediente"];
        $clasificacionEdi = $value["Tipo"];
        $bloqueo = "disabled='true'";
    }
} elseif (isset($_GET['delete'])) {

    $model_e = new TipoIngrediente();
    $ideliminar = $_GET["delete"];
    $model_e->__SET("idTipo_ingrediente", $ideliminar);
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
        $model_g = new TipoIngrediente();

        $model_g->__SET('idTipo_ingrediente', $id);
        $model_g->__SET('Tipo', $_POST['nombre']);
        
        if ($model_g->Guardar()) {

            $mensaje = "Se guardo Satisfactoriamente";
            print "<script>alert('$mensaje')</script>";
        } else {

            $mensaje = "Error en la conexión";
            print "<script>alert('$mensaje')</script>";
        }
    
}elseif (isset ( $_POST['editar'] ) ) {
    
    $model_m = new TipoIngrediente();
    $model_m->__SET('idTipo_ingrediente', $_GET['id']);
    $model_m->__SET('Tipo', $_POST['nombre']);

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


$model = new TipoIngrediente();
$tabla = "";
foreach ($model->Listar()as $value) {

    $tabla .="<tr>";

    $tabla .="<td>" . $value['idTipo_ingrediente'] . "</td>";
    $tabla .="<td>" . $value['Tipo'] . "</td>";
    $tabla .="<td> <a href='tipoController.php?id=".$value['idTipo_ingrediente']."'  class='btn btn-primary btn-xs' role='button'> <span class='glyphicon glyphicon-pencil'></span> </a> </td>";
    $tabla .="<td> <a href='tipoController.php?delete=".$value['idTipo_ingrediente']."' class='btn btn-danger btn-xs' role='button'>  <span class='glyphicon glyphicon-trash'></span> </a> </td>";
    $tabla .="</tr>";
}

include_once '../View/IngredienteTipo/tipo.php';

?>
