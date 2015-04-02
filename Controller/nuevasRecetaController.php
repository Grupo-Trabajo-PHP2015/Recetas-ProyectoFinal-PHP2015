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
require_once '../Model/ModelClasificacion.php';
require_once '../Model/ModelIngredientes.php';
require_once '../Model/ModelRecetas.php';
require_once '../Model/ModelRecetasIngredientes.php';

$model = new Ingredientes();
$tabla = "";
foreach ($model->Listar() as $value) {

    $tabla .="<tr>";

    $tabla .="<td>" . $value['Nombre'] . "</td>";
    $tabla .="<td id='selecion'> <img src='" . $value['Url'] . "' data-ingrediente='" . $value['Nombre'] . "' data-id='" . $value['idIngrediente'] . "'  width='200' heigth='200' class='img-thumbnail' class='img-responsive' > </td>";
    $tabla .="</tr>";
}

if (isset($_POST['guardar'])) {

    $archivo = $_FILES["archivo"]["tmp_name"];

    $destino = "../Archivos/" . $_FILES["archivo"]["name"];
    
    if ( $_FILES["archivo"]["type"] == "image/png" || $_FILES["archivo"]["type"] == "image/jpeg" || $_FILES["archivo"]["type"] == "image/jpg" ) {
     
        echo '<script>alert("Envio")</script>';
        
    }  else {
        
        echo '<script>alert("Fallo envio")</script>';
    }
    
}

$modelclasificacion = new Clasificacion();

$select = "";

foreach ($modelclasificacion->Select() as $value) {

    $select.='<option value="' . $value['idClasificacion'] . '" >' . $value['Clasificacion'] . '</option>';
}


include_once "../View/Recetas/nuevasRecetas.php";
?>