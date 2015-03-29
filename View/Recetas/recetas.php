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
                                <label class="col-md-4 control-label" for="titulo">Titulo:</label>  
                                <div class="col-md-6">
                                    <input id="titulo" name="titulo" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="porciones">Porciones:</label>  
                                <div class="col-md-6">
                                    <input id="porciones" name="porciones" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="editar_descripcion">Descripción:</label>  
                                <div class="col-md-6">
                                    <input id="editar_descripcion" name="editar_descripcion" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="clasificacion">Clasificación:</label>  
                                <div class="col-md-6">
                                    <input id="clasificacion" name="clasificacion" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="usuario">Autor:</label>  
                                <div class="col-md-6">
                                    <input id="usuario" name="usuario" type="text" placeholder="" class="form-control input-md">

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
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#nuevo"  style="margin-right: 40%;margin-top: 10%;" >
                            Agregar nuevas recetas
                        </button>
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
                                    <th>Nombre</th>
                                    <th>Imagen</th>
                                    <th>Descripción</th>
                                    <th>URL</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Modal -->
                <div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"  style="text-align: center" >Nueva receta</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal">
                                    <fieldset>


                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="titulo">Titulo:</label>  
                                            <div class="col-md-6">
                                                <input id="titulo" name="titulo" type="text" placeholder="" class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Textarea -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="descripcion">Descripción:</label>
                                            <div class="col-md-4">                     
                                                <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="porciones">Porciones:</label>  
                                            <div class="col-md-6">
                                                <input id="porciones" name="porciones" type="text" placeholder="" class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="clasificacion">Clasificación:</label>  
                                            <div class="col-md-6">
                                                <input id="clasificacion" name="clasificacion" type="text" placeholder="" class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="usuario">Autor:</label>  
                                            <div class="col-md-6">
                                                <input id="usuario" name="usuario" type="text" placeholder="" class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="editar"></label>
                                            <div class="col-md-4">
                                                <button id="editar" name="editar" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>  
            </div>



        </div>

        <script type="text/javascript" src="../Assets/js/jquery-1.11.2.js" ></script>
        <script type="text/javascript" src="../Assets/bootstrap-3.3.4-dist/js/bootstrap.js" ></script>

    </body>
</html>