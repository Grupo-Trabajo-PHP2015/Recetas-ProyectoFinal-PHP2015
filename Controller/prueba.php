<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

foreach ($_POST as $nombre_campo => $valor) {
    
    echo "Campo: ".$nombre_campo."  Valor: ".$valor."<br>";
}




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

?>

