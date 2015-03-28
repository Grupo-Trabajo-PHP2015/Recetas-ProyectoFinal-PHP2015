<!DOCTYPE html>
<html lang="es" >
<head>
	<meta charset="UTF-8" >
	<title>Ingredientes</title>
        <link rel="stylesheet" type="text/css" href="../Assets/bootstrap-3.3.4-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<center>
				<h1>Ingredientes</h1>
			</center>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
				<form class="form-horizontal"  method="POST" action="" enctype="multipart/form-data" >
<fieldset>

<!-- Form Name -->
<legend style="text-align: center" >Nuevos ingredientes</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre:</label>  
  <div class="col-md-6">
      <input id="textinput" name="textinput" type="text" placeholder="Nombre ingrediente" class="form-control input-md" autofocus="" >
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Descripción:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea"  placeholder="Caracteristicas del ingrediente o producto" rows="4" cols="150" ></textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Insertar imagen:</label>
  <div class="col-md-4">
    <input  class="input-file" type="file" name="archivo" >
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" type="submit" name="guardar" class="btn btn-primary">Guardar</button>
  </div>
</div>

</fieldset>
</form>

		</div>	
	</div>
</div>

    <script type="text/javascript" src="../Assets/js/jquery-1.11.2.js" ></script>
    <script type="text/javascript" src="../Assets/bootstrap-3.3.4-dist/js/bootstrap.js" ></script>

</body>
</html>