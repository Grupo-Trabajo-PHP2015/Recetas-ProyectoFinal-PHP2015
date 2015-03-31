<?php
    
echo '<br>Con el foreach<br><br>';
foreach($_POST as $nombre_campo => $valor){ 
   
    if ( $_POST[$nombre_campo]== $_POST["titulo"] || 
         $_POST[$nombre_campo]== $_POST["descripcion"] || 
            $_POST[$nombre_campo]== $_POST["clasificacion"]  || 
            $_POST[$nombre_campo]== $_POST["porciones"] || 
            $_POST[$nombre_campo]== $_POST["descripcion"] ||
             $_POST[$nombre_campo]== $_POST["autor"] ||
             $_POST[$nombre_campo]== $_POST["idUsuario"] ||
            $_POST[$nombre_campo]== $_POST["ListaIngrediente"] ||
            $_POST[$nombre_campo]== $_POST["guardar"]

            
            ) {
        
        echo " recetas ".$nombre_campo . "=" . $valor . "<br>";
   
        
    }  else {
        
    echo "<br><br><br> Cantidad  ".$nombre_campo . "=" . $valor . "<br>"; 
        
    }
    
  
}    


?>