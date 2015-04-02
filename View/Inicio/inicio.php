<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<<<<<<< HEAD
    <meta name="description" content="Elastic Image Slideshow with Thumbnail Preview" />
    <meta name="keywords" content="jquery, css3, responsive, image, slider, slideshow, thumbnails, preview, elastic" />
    <meta name="author" content="Codrops" />
=======
        <meta name="description" content="Elastic Image Slideshow with Thumbnail Preview" />
        <meta name="keywords" content="jquery, css3, responsive, image, slider, slideshow, thumbnails, preview, elastic" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../Assets/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../Assets/css/style2.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
        <noscript>
            <link rel="stylesheet" type="text/css" href="../Assets/css/noscript.css" />
        </noscript>
        <link rel="shortcut icon" href="../Assets/img/restaurant.png">
>>>>>>> origin/master
    <title>Inicio</title>
    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="../Assets/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="../Assets/css/style2.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
    <noscript>
        <link rel="stylesheet" type="text/css" href="../Assets/css/noscript.css" />
    </noscript>
    <link rel="stylesheet" type="text/css" href="../Assets/bootstrap-3.3.4-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../Assets/css/modal.css">
    <link href="../Assets/css/font-awesome.min.css" rel="stylesheet">
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

        <!-- Inicio de cuerpo -->
    	<div id="encabezado">
    	  <h1>Bienvenido Querido <?php echo $_SESSION['Rol']; ?></h1>
    	</div>
        
        <div class="container">
            <div class="header">
                <span class="right">
                    <a href="recetasController.php">
                        <strong>Encuentra aqui las mejores recetas</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div>
            <h1>Las mejores recetas para cocinas de todo tipo</h1>
            <div class="wrapper">
                <div id="ei-slider" class="ei-slider">
                    <ul class="ei-slider-large">
                        <li>
                            <img src="../Assets/img/large/6.jpg" alt="image06"/>
                            <div class="ei-title">
                                <h2>Tacos</h2>
                                <h3>Mexicanos</h3>
                            </div>
                        </li>
                        <li>
                            <img src="../Assets/img/large/1.jpg" alt="image01" />
                            <div class="ei-title">
                                <h2>Hamburguesa</h2>
                                <h3>Americana</h3>
                            </div>
                        </li>
                        <li>
                            <img src="../Assets/img/large/2.jpg" alt="image02" />
                            <div class="ei-title">
                                <h2>Chuzos de pollo</h2>
                                <h3>Colombianos</h3>
                            </div>
                        </li>
                        <li>
                            <img src="../Assets/img/large/3.jpg" alt="image03"/>
                            <div class="ei-title">
                                <h2>Spaguetti a' carbonara</h2>
                                <h3>Italianos</h3>
                            </div>
                        </li>
                        <li>
                            <img src="../Assets/img/large/4.jpg" alt="image04"/>
                            <div class="ei-title">
                                <h2>Chorizos</h2>
                                <h3>Peruanos</h3>
                            </div>
                        </li>
                        <li>
                            <img src="../Assets/img/large/5.jpg" alt="image05"/>
                            <div class="ei-title">
                                <h2>Langosta</h2>
                                <h3>Mediterranea</h3>
                            </div>
                        </li>
                        <li>
                            <img src="../Assets/img/large/7.jpg" alt="image07"/>
                            <div class="ei-title">
                                <h2>Quesadillas</h2>
                                <h3>Ecuatorianas</h3>
                            </div>
                        </li>
                    </ul><!-- ei-slider-large -->
                    <ul class="ei-slider-thumbs">
                        <li class="ei-slider-element">Current</li>
                        <li><a href="#">Slide 6</a><img src="../Assets/img/thumbs/6.jpg" alt="thumb06" /></li>
                        <li><a href="#">Slide 1</a><img src="../Assets/img/thumbs/1.jpg" alt="thumb01" /></li>
                        <li><a href="#">Slide 2</a><img src="../Assets/img/thumbs/2.jpg" alt="thumb02" /></li>
                        <li><a href="#">Slide 3</a><img src="../Assets/img/thumbs/3.jpg" alt="thumb03" /></li>
                        <li><a href="#">Slide 4</a><img src="../Assets/img/thumbs/4.jpg" alt="thumb04" /></li>
                        <li><a href="#">Slide 5</a><img src="../Assets/img/thumbs/5.jpg" alt="thumb05" /></li>
                        <li><a href="#">Slide 7</a><img src="../Assets/img/thumbs/7.jpg" alt="thumb07" /></li>
                    </ul><!-- ei-slider-thumbs -->
                </div><!-- ei-slider -->
            </div><!-- wrapper -->
        </div>
        <!-- Fin de cuerpo -->  


        <!-- Modal de perfil -->
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
    </div>
    <hr>
    <!-- Fin de modal perfil -->

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
        <script type="text/javascript" src="../Assets/js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="../Assets/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
                    animation           : 'center',
                    autoplay            : true,
                    slideshow_interval  : 3000,
                    titlesFactor        : 0
                });
            });
        </script>
    </body>
</html>
