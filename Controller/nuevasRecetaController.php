<?php

require_once '../Config/Config.php';
require_once '../Library/DataBase.php';
require_once '../Model/ModelIngredientes.php';

$model = new Ingredientes();
$tabla = "";
foreach ($model->Listar() as $value) {

    $tabla .="<tr>";

    $tabla .="<td>" . $value['Nombre'] . "</td>";
    $tabla .="<td >  <div class='col-md-4'> <input type='number' style='text-align:center' id='cantidad' class='cantidad' name='cantidad' min='2' max='20' value='2' class='form-control input-md'> </div> </td>";
    $tabla .="<td id='selecion'> <img src='".$value['Url']."' data-ingrediente='".$value['Nombre']."'  width='200' heigth='200' class='img-thumbnail' class='img-responsive' > </td>";
    $tabla .="</tr>";
}


    
  
include_once "../View/Recetas/nuevasRecetas.php";
?>