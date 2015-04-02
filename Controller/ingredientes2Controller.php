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
require_once '../Model/ModelIngredientes.php';
require_once '../Model/ModelTipoIngrediente.php';

$id_n = "";
$nombre = "";
$url = "";
$descripcion2 = "";
$bloqueo = "";

$model = new Ingredientes();
$tabla = "";
foreach ($model->Listar() as $value) {

    $tabla .="<tr>";

    $tabla .="<td>" . $value['Nombre'] . "</td>";
    $tabla .="<td> <img src='".$value['Url']."'   width='350' heigth='150' class='img-thumbnail' class='img-responsive' > </td>";
    $tabla .="<td>" . $value['Desripcion'] . "</td>";
    $tabla .="</tr>";
}

$modelTipo = new TipoIngrediente();

$select="";
        
foreach ( $modelTipo->Select() as $value ){
    
    $select.='<option value="'.$value['idTipo_ingrediente'].'" >'.$value['Tipo'].'</option>';
}


include_once "../View/Ingredientes/ingredientes2.php";
?>