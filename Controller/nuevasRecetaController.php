<?php

//Esto de sessiones lo puedes quitar solo puse para una prueba
session_start();
$_SESSION['Nombre']="Esteban";
$_SESSION['Cedula']=1214722046;

require_once '../Config/Config.php';
require_once '../Library/DataBase.php';
require_once '../Model/ModelIngredientes.php';
require_once '../Model/ModelRecetas.php';
$model = new Ingredientes();
$tabla = "";
foreach ($model->Listar() as $value) {

    $tabla .="<tr>";

    $tabla .="<td>" . $value['Nombre'] . "</td>";
    $tabla .="<td id='selecion'> <img src='".$value['Url']."' data-ingrediente='".$value['Nombre']."' data-id='".$value['idIngrediente']."'  width='200' heigth='200' class='img-thumbnail' class='img-responsive' > </td>";
    $tabla .="</tr>";
}

if ( isset($_POST['guardar'])) {
 
    
    $titulo = $_POST['titulo'];
    $descripcionR = $_POST['descripcion'];
    $clasificacionR = $_POST['clasificacion'];
    $porciones = $_POST['porciones'];
    $usuario = $_POST['idUsuario'];
    $id_r = rand(2, 500);
    $model_r = new Recetas();
    
    $model_r->__SET('idReceta',$id_r);
    $model_r->__SET('Usuarios_Cedula',$usuario);
    $model_r->__SET('Titulo',$titulo);
    $model_r->__SET('Porciones',$porciones);
    $model_r->__SET('Descripcion',$descripcionR);
    $model_r->__SET('Clasificaciones_idClasificacion',$clasificacionR);
    
    if ( $model_r->Guardar() ) {
        
        echo '<script>alert("Guardado satisfactoriamente")</script>';
    }  else {
    
        echo '<script>alert("Fallo en la conexión")</script>';
    }
}  
    
  
include_once "../View/Recetas/nuevasRecetas.php";
?>