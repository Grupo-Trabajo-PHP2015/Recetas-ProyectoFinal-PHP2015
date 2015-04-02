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

$id_n = "";
$clasificacionEdi = "";
$bloqueo="";

$model = new Clasificacion();
$tabla = "";
foreach ($model->Listar()as $value) {

    $tabla .="<tr>";

    $tabla .="<td>" . $value['idClasificacion'] . "</td>";
    $tabla .="<td>" . $value['Clasificacion'] . "</td>";
    $tabla .="</tr>";
}

include_once '../View/Clasificacion/clasificacion2.php';

?>
