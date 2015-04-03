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
    $tabla .="<td> <form id='formulario' method='POST' action='RecetasIngredientesController.php'> 
            <input type='hidden' name='nombre' value='".$value['idReceta']."' > 
             <button  name='btn-enviar' class='btn btn-success btn-xs'>
              <span class='glyphicon glyphicon-eye-open'></span> </button> </form>  </td>";
   
    $tabla .="</tr>";
}


include_once '../View/Recetas/recetas2.php';
?>