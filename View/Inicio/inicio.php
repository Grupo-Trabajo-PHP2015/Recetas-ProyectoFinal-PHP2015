<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio</title>

</head>

<body>
	<h2>Soy vista 1</h2>
	<div id="encabezado">

	 <?php 
	    echo $_SESSION["Nombre"];
	  ?>
	 
	</div>
		  <div id="menu">
	        <ul >

	              <?php 
	              echo $_SESSION["menu"];
	               ?>
	        </ul>
	  </div>
	</div>

</body>

</html>
