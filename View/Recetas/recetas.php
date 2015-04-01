<!DOCTYPE html>
<html lang="es" >
    <head>
        <meta charset="UTF-8">

        <title>Recetas</title>
        <link rel="stylesheet" type="text/css" href="../Assets/bootstrap-3.3.4-dist/css/bootstrap.css">
    
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h1>Recetas</h1>
                    </center>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                            <legend style="text-align: center" >Editar receta</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="titulo">ID:</label>  
                                <div class="col-md-6">
                                    <input id="titulo" name="titulo" type="text" placeholder="" class="form-control input-md"  value="  <?php echo $id_n; ?>" <?php echo $bloqueo; ?> >

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="porciones">Titulo:</label>  
                                <div class="col-md-6">
                                    <input id="porciones" name="titulo" type="text" placeholder="" class="form-control input-md" value="  <?php echo $TituloEdi; ?>" >

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="editar_descripcion">Descripción:</label>  
                                <div class="col-md-6">
                                    <input id="editar_descripcion" name="descripcion" type="text" placeholder="" class="form-control input-md" value="  <?php echo $DescripcionEdi; ?>" >

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="clasificacion">Porciones:</label>  
                                <div class="col-md-6">
                                    <input id="clasificacion" name="porciones" type="text" placeholder="" class="form-control input-md" value="  <?php echo $PorcionesEdi; ?>" >

                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="editar"></label>
                                <div class="col-md-4">
                                    <button id="editar" name="editar" class="btn btn-success">Editar</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>

                </div>
                <div class="col-md-4">

                    <center>

                        <!-- Button trigger modal -->
                        <a href='nuevasRecetaController.php' class='btn btn-primary btn-lg' role='button'style="margin-right: 40%;margin-top: 10%;" >
                            Agregar nuevas recetas
                        </a>
                    </center>

                </div>	
            </div>
            <hr>
            <div class="row">
                <div class="table-responsive">
                    <div class="col-md-6">
                        <table border="1" class="table table-bordred table-striped" style="text-align: center" >
                            <thead>
                                <tr>
                                    <th>Receta</th>
                                    <th>Descripción</th>
                                    <th>Porciones</th>
                                    <th>Fecha publicación</th>
                                    <th>Clasificación</th>
                                    <th>Autor</th>
                                    <th>Editar</th>
                                    <th>Ver</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php echo $tabla; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           


        </div>

        <script type="text/javascript" src="../Assets/js/jquery-1.11.2.js" ></script>
        <script type="text/javascript" src="../Assets/bootstrap-3.3.4-dist/js/bootstrap.js" ></script>

    </body>
</html>