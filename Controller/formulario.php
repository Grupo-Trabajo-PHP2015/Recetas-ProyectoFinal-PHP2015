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
require_once '../Model/ModelRecetasIngredientes.php';


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
            
            $model_R_I->__SET('Recetas_idReceta',1);
            $model_R_I->__SET('Ingredientes_idIngrediente',$ID_ing);
            $model_R_I->__SET('Cantidad',$cantidad);
            if ( $model_R_I->Guardar() ) {
                
                echo '<script>console.log("Guardado satisfactoriamente")</script>';
     
                
            }  else {
             
                echo '<script>console.log("Fallo en la conexión")</script>';
            }
        }
    }    


?>