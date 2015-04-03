<!DOCTYPE html>
<html lang="es" >
    <head>
        <meta charset="UTF-8">

        <title>Recetas</title>
        <link rel="shortcut icon" href="../Assets/img/restaurant.png">
        <link rel="stylesheet" type="text/css" href="../Assets/bootstrap-3.3.4-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../Assets/css/modal.css">
        <link rel="stylesheet" type="text/css" href="../Assets/css/jquery.dataTables.css">
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
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                    <?php echo $_SESSION["menu"];?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href='#'><span class='glyphicon glyphicon-user'></span> <?php echo $_SESSION["Nombre"];?></a></li>
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


          <div id="container4">
          <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
          <!-- Overlay -->
          <div class="overlay"></div>

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item slides active">
              <div class="slide-1"></div>
              <div class="hero">
                <hgroup>
                    <h1 id="titulo1">RECETAS</h1>        
                    <h3>Gestiona tus recetas</h3>
                </hgroup>
              </div>
            </div>
            <div class="item slides">
              <div class="slide-2"></div>
              <div class="hero">        
                <hgroup>
                    <h1 id="titulo1">REGISTRA</h1>        
                    <h3>Agrega las recetas que desees</h3>
                </hgroup>       
                <button class="btn btn-hero btn-lg" role="button" data-toggle="modal" data-target="#nuevo">Agregar nuevas recetas</button>
              </div>
            </div>
            <div class="item slides">
              <div class="slide-3"></div>
              <div class="hero">        
                <hgroup>
                    <h1 id="titulo1">ELIMINA</h1>        
                    <h3>Elimina las que no desees en tu menú</h3>
                </hgroup>
                <button class="btn btn-hero btn-lg" role="button">Eliminar</button>
              </div>
            </div>
          </div> 
            </div>

            <hr>
            <div style="margin-left:70px; margin-righ:-10px;" class="row">
                <div class="table-responsive">
                    <div class="col-md-11">
                        <table  id="example" border="1" class="table table-bordred table-striped" style="text-align: center" >
                            <thead>
                                <tr>
                                    <th>Receta</th>
                                    <th>Descripción</th>
                                    <th>Porciones</th>
                                    <th>Fecha publicación</th>
                                    <th>Clasificación de comida</th>
                                    <th>Autor</th>
                                    <th>Ver ingredientes</th>
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

    <!-- Pie de pagina -->
    <footer>
        <div class="row1">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-3 col-md-6">
                        <div class="container">
                            <div class="col-lg-3">
                                <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                                    <img src="../Assets/img/Esteban.jpg" class="img-responsive img-thumbnail" alt="">
                                    <div class="caption">
                                        <div class="blur"></div>
                                        <div class="caption-text">
                                            <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:13px; font-size:20px;">Esteban Varela</h3>
                                            <p>Tecnologo en Analisis y Desarrollo de Sistemas de Informacion...</p>
                                            <a class=" btn btn-default" href="https://plus.google.com/u/0/107465545975757511169/posts"><span class="glyphicon glyphicon-plus"> INFORMACION</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                                    <img src="../Assets/img/Tatiana.jpg" class="img-responsive img-thumbnail" alt="">
                        
                                    <div class="caption">
                                        <div class="blur"></div>
                                        <div class="caption-text">
                                            <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:13px; font-size:20px;">Tatiana Betancur</h3>
                                            <p>Tecnologa en Analisis y Desarrollo de Sistemas de Informacion...</p>
                                            <a class=" btn btn-default" href="https://plus.google.com/u/0/100599910164672027111/posts"><span class="glyphicon glyphicon-plus"> INFORMACION</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6">
                                <h3>Siguenos en:</h3>
                                <a href="https://twitter.com/JULIETH_BM" id="gh" target="_blank" title="Twitter"><span class="">
                                 <i class="fa fa-twitter "></i>
                                </span>
                                Twitter-Tatiana Betancur</a>
                                <br>
                                <a href="https://twitter.com/teban17229" id="gh" target="_blank" title="Twitter"><span class="">
                                  <i class="fa fa-twitter"></i>
                                </span>
                                Twitter-Esteban Varela</a>
                                <br>
                                <a href="https://github.com/TatianaBM"  target="_blank" title="GitHub"><span class="">
                                <i class="fa fa-github"></i>
                                </span>
                                GitHub-Tatiana Betancur</a>
                                <br>
                                <a href="https://github.com/esteban18plus"  target="_blank" title="GitHub"><span class="">
                                <i class="fa fa-github"></i>
                                </span>
                                GitHub-Esteban Varela</a>
                                <div id="fb-root"></div>
                                <br>
                                <div class="fb-like" data-href="" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                                <a href="https://twitter.com/share" class="twitter-share-button" data-url="">Tweet</a>
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

                                <div class="g-plusone" data-annotation="inline" data-width="300" data-href=""></div>

                                <script type="text/javascript">
                                  (function() {
                                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                    po.src = 'https://apis.google.com/js/platform.js';
                                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                  })();
                                </script> 
                                <br>
                                <p>Copyright © 2015 | <a href="">ADSI</a></p>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <h3>Contactenos:</h3>
                                <p>¿Tiene alguna pregunta o comentario ? Ponte en contacto con nosotros!</p>
                                <h3>Contactanos en Facebook:</h3>
                                <a href="https://www.facebook.com/yulieth.bethancurt"  target="_blank" title="GitHub"><span class="">
                                <i class="fa fa-facebook"></i>
                                </span>
                                Facebook-Tatiana Betancur</a>
                                <br>
                                <a href="https://www.facebook.com/pepascondones"  target="_blank" title="GitHub"><span class="">
                                  <i class="fa fa-facebook"></i>
                                </span>
                                Facebook-Esteban Varela</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
                    <!-- Fin pie de pagina -->
        <script type="text/javascript" src="../Assets/js/jquery-1.11.2.js" ></script>
        <script type="text/javascript" src="../Assets/bootstrap-3.3.4-dist/js/bootstrap.js" ></script>
        <script src="../Assets/js/jquery.dataTables.js"></script>
    <script class="init">

$(document).ready(function() {
 $('#example').dataTable();

} );
 </script>

    </body>
</html>