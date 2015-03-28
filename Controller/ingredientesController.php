<?php

require_once '../Config/Config.php';
require_once '../Library/DataBase.php';
require_once '../Model/ModelIngredientes.php';



if (isset($_POST['guardar'])) {
   
    $archivo = $_FILES["archivo"]["tmp_name"];

    $destino = "../Archivos/" . $_FILES["archivo"]["name"];


    if ($_FILES["archivo"]["type"] == "image/png" || $_FILES["archivo"]["type"] == "image/jpeg" || $_FILES["archivo"]["type"] == "image/jpg") {

  
            move_uploaded_file($archivo, $destino);
            $id="";
            $model_ing = new Ingredientes();
            
            $model_ing->__SET('idIngrediente',$id);
            $model_ing->__SET('Nombre',$_POST['nombre']);
            $model_ing->__SET('Desripcion',$_POST['descripcion']);
            $model_ing->__SET('Url',$destino);
            $model_ing->__SET('Tipo_ingredientes_idTipo_ingrediente',$_POST['clasificacion']);
            if ( $model_ing->Guardar() ) {
//                $mensaje = 
            echo "Se guardo Satisfactoriamente";
//                print "<script>alert('$mensaje')</script>";
            }  else {
                
//                $mensaje = 
                  echo "Error en la conexión";
//                print "<script>alert('$mensaje')</script>";
                
            }
            
    } else {

        echo "Error al guardar \n Solo se pueden imagenes con extención JPEG , PNG , JPG";
        
    }
}

$model = new Ingredientes();
$tabla = "";
foreach ($model->Listar() as $value) {

    $tabla .="<tr>";

    $tabla .="<td>" . $value['Nombre'] . "</td>";
    $tabla .="<td>" . $value['Desripcion']. "</td>";
    $tabla .="<td>" . $value['Url'] . "</td>";
    $tabla .="<td> <button type='button' class='btn btn-primary btn-xs' > <span class='glyphicon glyphicon-pencil'></span> </button> </td>";
    $tabla .="<td> <button type='button' class='btn btn-danger btn-xs' >  <span class='glyphicon glyphicon-trash'></span> </button> </td>";
    $tabla .="</tr>";
}



include_once "../View/Ingredientes/ingredientes.php";
?>