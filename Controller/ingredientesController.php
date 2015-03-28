<?php

if (isset($_POST['guardar'])) {
   
    $archivo = $_FILES["archivo"]["tmp_name"];

    $destino = "../Archivos/" . $_FILES["archivo"]["name"];


    if ($_FILES["archivo"]["type"] == "image/png" || $_FILES["archivo"]["type"] == "image/jpeg" || $_FILES["archivo"]["type"] == "image/jpg") {

        try {
            move_uploaded_file($archivo, $destino);

            $mensaje = "se guardo";
            print "<script>alert('$mensaje')</script>";
        } catch (Exception $exc) {

            $mensaje = $exc->getTraceAsString();
            print "<script>alert('$mensaje')</script>";
        }
    } else {

        echo "Error al guardar \n Solo se pueden imagenes con extención JPEG , PNG , JPG";
        
    }
}

include_once "../View/ingredientes.php";
?>