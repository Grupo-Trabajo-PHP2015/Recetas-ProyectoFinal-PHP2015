<!DOCTYPE html>
<html lang="es" >
    <head>
        <meta charset="UTF-8" >
        <title>Ingredientes</title>
        <link rel="shortcut icon" href="../Assets/img/restaurant.png">
        <link rel="stylesheet" type="text/css" href="../Assets/bootstrap-3.3.4-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" type="text/css" href="../Assets/css/modal.css">
    </head>
    <body>


      <!-- Menu de navegacion horizontal -->
                <nav id="menu_navegar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <div class="container-fluid">

                    <!-- Integracion dispositivos moviles-->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?php echo $_SESSION["menu"];?>

                            

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href='#'><span class='glyphicon glyphicon-user'></span> <?php echo $_SESSION["Nombre"];?></a></li>
                                <li><a href="#"><span class="fa fa-bell"></span></a></li>
                                <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a data-toggle="modal" data-target="#myModal2">Perfil</a></li>
                                        <li><a href="perfilController.php">Cuenta</a></li>
                                        <li class="divider"></li>
                                        <li>
                                            <form method="POST"action='<?php echo $_SERVER['PHP_SELF']; ?>' >
                                                  <input type="hidden" name="cerrar">

                                                  <button class="button1" type="submit"><span class='glyphicon glyphicon-off'></span> Cerrar sessi&oacute;n</button>
                                              </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                </nav>        
        <!-- Fin de menu horizontal -->

        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
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
                            <legend style="text-align: center" >Editar ingredientes</legend>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">ID:</label>  
                                <div class="col-md-6">
                                    <input id="textinput" name="id"   type="text"  placeholder="Nombre ingrediente" class="form-control input-md" <?php echo $bloqueo ?> value=" <?php echo $id_n; ?> " >

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Nombre:</label>  
                                <div class="col-md-6">
                                    <input id="textinput" name="nombre" type="text" placeholder="Nombre ingrediente" class="form-control input-md" value=" <?php echo $nombre; ?> " >

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Descripción:</label>  
                                <div class="col-md-6">
                                    <input id="textinput" name="descripcion2" type="text" placeholder="Caracteristicas del producto" class="form-control input-md"  value=" <?php echo $descripcion2; ?> " >

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">URL:</label>  
                                <div class="col-md-6">
                                    <input id="textinput" name="url"  <?php echo $bloqueo ?> type="text" placeholder="Dirección imagen" class="form-control input-md"  value=" <?php echo $url; ?> " >

                                </div>
                            </div>


                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="editar"></label>
                                <div class="col-md-4">
                                    <button id="editar" type="submit" name="editar" class="btn btn-success">Editar</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>

                </div>
                <div class="col-md-4">

                    <center>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#nuevo"  style="margin-right: 40%;margin-top: 10%;" >
                            Agregar nuevos ingredientes
                        </button>
                    </center>

                </div>	
            </div>
            <hr>
            <div class="row">
                <div class="table-responsive">
                    <div class="col-md-12">
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

                                <?php
                                echo $tabla;
                                ?>

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
                                <h4 class="modal-title" id="myModalLabel"  style="text-align: center" >Nuevos ingredientes</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal"  method="POST" action="" enctype="multipart/form-data" >
                                    <fieldset>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="textinput">Nombre:</label>  
                                            <div class="col-md-6">
                                                <input id="textinput" name="nombre" type="text" placeholder="Nombre ingrediente" class="form-control input-md" autofocus="" value=" " >

                                            </div>
                                        </div>

                                        <!-- Textarea -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="textarea">Descripción:</label>
                                            <div class="col-md-4">                     
                                                <textarea class="form-control" id="textarea" name="descripcion"  placeholder="Caracteristicas del ingrediente o producto" rows="4" cols="150" > </textarea>
                                            </div>
                                        </div>

                                        <!-- File Button --> 
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="filebutton">Insertar imagen:</label>
                                            <div class="col-md-4">
                                                <input  class="input-file" type="file" name="archivo" >
                                            </div>
                                        </div>
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="clasificacion">Tipo Ingrediente:</label>
                                            <div class="col-md-5">
                                                <select id="clasificacion"  name="clasificacion" class="form-control">
                                                   
                                                     <?php echo $select; ?>
                                            
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="guardar"></label>
                                            <div class="col-md-4">
                                                <button id="guardar" type="submit" name="guardar" class="btn btn-primary">Guardar</button>
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


            
 <!-- Modal2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"  style="text-align: center" >Perfil</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal"  action="" method="POST" >
                        <fieldset>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Cedula</label>  
                                <div class="col-md-6">
                                    <input id="textinput" disabled="" value="<?php echo $_SESSION['Cedula']; ?>" name="Cedula" type="text"  class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Nombre</label>  
                                <div class="col-md-6">
                                    <input id="textinput" name="Nombre" disabled="" value="<?php echo $_SESSION['Nombre']; ?>" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Email</label>  
                                <div class="col-md-6">
                                    <input id="textinput" name="Email" disabled="" value="<?php echo $_SESSION['Email']; ?>" type="email" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Usuario</label>  
                                <div class="col-md-6">
                                    <input id="textinput" name="Usuario" disabled="" value="<?php echo $_SESSION['Usuario']; ?>" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput" >Password</label>  
                                <div class="col-md-6">
                                    <input id="textinput" name="Password" disabled="" value="<?php echo $_SESSION['Password']; ?>" type="password" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Rol</label>  
                                <div class="col-md-6">
                                    <input id="textinput" disabled="" value="<?php echo $_SESSION['Rol']; ?>" name="Roles_idRol" type="text" placeholder="Usuario" class="form-control input-md">

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

            <script type="text/javascript" src="../Assets/js/jquery-1.11.2.js" ></script>
            <script type="text/javascript" src="../Assets/bootstrap-3.3.4-dist/js/bootstrap.js" ></script>

    </body>
</html>