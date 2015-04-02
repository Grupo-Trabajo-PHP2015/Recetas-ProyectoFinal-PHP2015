<?php

require_once '../Config/Config.php';
require_once '../Library/DataBase.php';
require_once '../Model/ModelRecetas.php';

$resultado="";
    
    $modelMostrar = new Recetas();
    
    
   $nombreReceta= addslashes(htmlspecialchars($_POST['nombre']));
    
    $modelMostrar->__SET('idReceta',$nombreReceta);
    
    foreach ( $modelMostrar->Buscar() as $value ){
        
        $tituloreceta = $value['Titulo'];
    }
    
    if ( $modelMostrar->MostrarIngrediente() ) {
        
        $resultado .= '<div class="row">';
        $resultado .= '<div class="table-responsive">';
        $resultado .= '<div class="col-md-6">';
        $resultado .= '<table border="1" class="table table-bordred table-striped" style="text-align: center" >';
        
        $resultado .= '<thead>';
            $resultado .= '<tr>';
            
            $resultado .= '<th>';
                $resultado .= 'Ingrediente';
            $resultado .= '</th>';
            
            $resultado .= '<th>';
                $resultado .= 'Cantidad';
            $resultado .= '</th>';
            
            $resultado .= '</tr>';

        $resultado .= '</thead>';
        
        $resultado .= '</tbody>';
        foreach (  $modelMostrar->MostrarIngrediente() as $value  ){
            $resultado .="<tr>";
            
            $resultado .="<td>";
            $resultado .=$value['Nombre'];
            $resultado .="</td>";
            
            $resultado .="<td>";
            $resultado .=$value['Cantidad'];
            $resultado .="</td>";
            
            $resultado .="</tr>";
        }
        
        $resultado .= '</tbody>';
        
        $resultado .= '</table>';
         $resultado .= '</div>';
        $resultado .= '</div>';
        $resultado .= '</div>';
    }  else {
        
        $resultado ="Error conexion";
    }

    include_once '../View/Recetas/RecetasIngredientes.php';
?>