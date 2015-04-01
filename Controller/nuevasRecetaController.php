<?php

//Esto de sessiones lo puedes quitar solo puse para una prueba
session_start();
$_SESSION['Nombre'] = "Esteban";
$_SESSION['Cedula'] = 1214722046;

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


    $titulo = $_POST['titulo'];
    $descripcionR = $_POST['descripcion'];
    $clasificacionR = $_POST['clasificacion'];
    $porciones = $_POST['porciones'];
    $usuario = $_POST['idUsuario'];
    $id_r = rand(2, 500);
    $model_r = new Recetas();

    $model_r->__SET('idReceta', $id_r);
    $model_r->__SET('Usuarios_Cedula', $usuario);
    $model_r->__SET('Titulo', $titulo);
    $model_r->__SET('Porciones', $porciones);
    $model_r->__SET('Descripcion', $descripcionR);
    $model_r->__SET('Clasificaciones_idClasificacion', $clasificacionR);

    if ($model_r->Guardar()) {

        foreach ($_POST as $nombre_campo => $valor) {

            if ($_POST[$nombre_campo] == $_POST["titulo"] ||
                    $_POST[$nombre_campo] == $_POST["descripcion"] ||
                    $_POST[$nombre_campo] == $_POST["clasificacion"] ||
                    $_POST[$nombre_campo] == $_POST["porciones"] ||
                    $_POST[$nombre_campo] == $_POST["descripcion"] ||
                    $_POST[$nombre_campo] == $_POST["autor"] ||
                    $_POST[$nombre_campo] == $_POST["idUsuario"] ||
                    $_POST[$nombre_campo] == $_POST["ListaIngrediente"]
            ) {
                
            } elseif ($_POST[$nombre_campo] != $_POST['guardar']) {

                $ID_ing = $nombre_campo;
                $cantidad = $valor;

                $model_R_I = new RecetasIngredientes();

                $model_R_I->__SET('Recetas_idReceta', $id_r);
                $model_R_I->__SET('Ingredientes_idIngrediente', $ID_ing);
                $model_R_I->__SET('Cantidad', $cantidad);
                if ($model_R_I->Guardar()) {

                    echo '<script>console.log("Guardado satisfactoriamente")</script>';
                } else {

                    echo '<script>console.log("Fallo en la conexión")</script>';
                }
            }
        }



        echo '<script>alert("Guardado satisfactoriamente")</script>';
        header("location: recetasController.php");
    } else {

        echo '<script>alert("Fallo en la conexión")</script>';
    }
}

$modelclasificacion = new Clasificacion();

$select = "";

foreach ($modelclasificacion->Select() as $value) {

    $select.='<option value="' . $value['idClasificacion'] . '" >' . $value['Clasificacion'] . '</option>';
}


include_once "../View/Recetas/nuevasRecetas.php";
?>