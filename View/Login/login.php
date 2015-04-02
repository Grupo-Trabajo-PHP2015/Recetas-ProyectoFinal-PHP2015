<!DOCTYPE html>
<html lang="es" >
    <head>
        <meta charset="UTF-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../Assets/bootstrap-3.3.4-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../Assets/css/modal.css">
        <link rel="stylesheet" type="text/css" href="../Assets/css/demo2.css" />
        <link rel="stylesheet" type="text/css" href="../Assets/css/style5.css" />
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
                    <ul class="nav navbar-nav">
                        <li><a href="loginController.php"><img id="img1" class="img-responsive" src="../Assets/img/logo.png"></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Iniciar sesion</a></li>
                        <li><a data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-plus-sign"></span> Registrarse</a></li>
                    </ul>
                </div>
            </div>
        </nav>        
        <!-- Fin de menu horizontal -->

        <!-- Imgenes de fondo slider -->
        <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3>Arroz </h3></div></li>
            <li><span>Image 02</span><div><h3>Rollitos</h3></div></li>
            <li><span>Image 03</span><div><h3>Postres</h3></div></li>
            <li><span>Image 04</span><div><h3>Ensaladas</h3></div></li>
            <li><span>Image 05</span><div><h3>Carnes </h3></div></li>
            <li><span>Image 06</span><div><h3>Verduras</h3></div></li>
        </ul>
        <!-- Fin de slider -->  
            
        <!-- Modal de inicio sesion -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"  style="text-align: center" >Inicio de sesión</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal"  action="" method="POST" >
                            <fieldset>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Usuario</label>  
                                    <div class="col-md-6">
                                        <input id="textinput" name="Usuario" type="text" placeholder="Ingresar usuario" required class="form-control input-md">
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Contraseña</label>  
                                    <div class="col-md-6">
                                        <input id="textinput" name="Password" type="password" required placeholder="Ingresar contraseña" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="singlebutton"></label>
                                    <div class="col-md-4">
                                        <button id="singlebutton" type="submit" name="session" class="btn btn-success">Iniciar sessión</button>
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
        <!-- Fin modal 1 -->



        <!-- Modal2  de registro-->
        <div class="modal fade" id="myModal2" tabindex="-1" style="text-align: left" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"  style="text-align: center" >Registrarse</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal"  action="" method="POST" >
                            <fieldset>

                                <!-- Text input-->
                                <div class="form-group" >
                                    <label class="col-md-4 control-label"  for="textinput">Cedula</label>  
                                    <div class="col-md-6">
                                        <input id="textinput" name="Cedula" type="number" required class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Nombres</label>  
                                    <div class="col-md-6">
                                        <input id="textinput" name="Nombre" type="text" required placeholder="" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Email</label>  
                                    <div class="col-md-6">
                                        <input id="textinput" name="Email" type="email" required placeholder="" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Usuario</label>  
                                    <div class="col-md-6">
                                        <input id="textinput" name="Usuario" required type="text" placeholder="" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput" >Contraseña</label>  
                                    <div class="col-md-6">
                                        <input id="textinput" name="Password" required type="password" placeholder="" class="form-control input-md">
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label"  style="display:none;" for="textinput">Rol</label>  
                                    <div class="col-md-6">
                                        <input id="textinput" style="display:none;" value="1" name="Roles_idRol" type="text" placeholder="Usuario" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="singlebutton"></label>
                                    <div class="col-md-4">
                                        <button id="singlebutton" type="submit" name="action"  value="Registrar" class="btn btn-success">Registrarse</button>
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
        <!-- Fin modal 2 -->

        <script type="text/javascript" src="../Assets/js/jquery-1.11.2.js" ></script>
        <script type="text/javascript" src="../Assets/bootstrap-3.3.4-dist/js/bootstrap.js" ></script>
        <script type="text/javascript" src="../Assets/js/modernizr.custom.86080.js"></script>
    </body>
</html>