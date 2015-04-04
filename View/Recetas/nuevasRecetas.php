<!DOCTYPE html>
<html lang="es" >
    <head>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NuevasRecetas</title>
        <link rel="shortcut icon" href="../Assets/img/restaurant.png">
        <link rel="stylesheet" type="text/css" href="../Assets/bootstrap-3.3.4-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../Assets/fonts/style.css">
        <link rel="stylesheet" type="text/css" href="../Assets/css/modal.css">
        <link rel="stylesheet" type="text/css" href="../Assets/css/style3.css">
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
        <div class="container">
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                        <p>Paso 1</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>Paso 2</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Paso 3</p>
                    </div>
                </div>
            </div>
            <form role="form" action="" method="POST">
                <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Paso 1</h3>
                             <div style="margin-top:10px; margin-bottom:20px;" class="alert alert-danger alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <strong>Importante!</strong> Para agregar una receta es necesario que llene 
                              <br> todos los campos de lo contrario no se hara efectivo el registro'. 
                            </div>
                            <br>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Siguiente</button>
                            <table  cellspacing="20" >
                                <tr>
                                    <td>  <label class="col-md-4 control-label" >Titulo:</label> </td>
                                    <td>  <input name="titulo" type="text" placeholder="Nombre de su receta" class="form-control input-md" required="required" > </td>
                                </tr>
                                <tr>
                                    <td> <hr> </td>
                                    <td> <hr> </td>
                                </tr>
                                <tr>
                                    <td>  <label  class="col-md-4 control-label" >Descripción:</label> </td>
                                    <td>  <textarea name="descripcion" placeholder="Paso a paso receta" required="required" class="form-control input-md" rows="4" cols="50" ></textarea> </td>
                                </tr>
                                <tr>
                                    <td> <hr> </td>
                                    <td> <hr> </td>
                                </tr>
                               
                                <tr>
                                    <td> <label class="col-md-4 control-label" for="selectbasic">Clasificación</label> </td>
                                    <td>   
                                        <div class="col-md-6">
                                            <select id="selectbasic" name="clasificacion" class="form-control"  required="required">

                                                <?php echo $select; ?>

                                            </select>
                                        </div> 
                                    </td>
                                </tr>
                                <tr>
                                    <td> <hr> </td>
                                    <td> <hr> </td>
                                </tr>
                                <tr>
                                    <td>  <label class="col-md-3 control-label" >Porciones:</label> </td>
                                    <td>  <input name="porciones" type="number" min="2" max="20"  class="form-control input-md" required="required" > </td>
                                </tr>
                                <tr>
                                    <td> <hr> </td>
                                    <td> <hr> </td>
                                </tr>
                                <tr>
                                    <td>  <label class="col-md-3 control-label" >Autor:</label> </td>
                                    <td>  
                                        <input name="autor" id="autor" style="text-align: center" type="text" placeholder="Nombre usuario" class="form-control input-md" value=" <?php echo $_SESSION['Nombre'] ?>  " > 

                                        <input name="idUsuario" id="idUsuario" style="text-align: center" type="hidden" class="form-control input-md" value=" <?php echo $_SESSION['Cedula']; ?> " >
                                    </td>
                                </tr>
                            </table>  

                            

                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3>Paso 2</h3>
                            <br>
                            
                            <div style="margin-top:10px; margin-bottom:20px;" class="alert alert-success alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <strong>Instruccion!</strong> Para agregar un ingrediente a la receta
                              <br>  arrastre la imagen hasta 'ingredientes necesarios'. 
                            </div>
                            <div style="margin-top:10px; margin-bottom:20px;" class="alert alert-danger alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <strong>Importante!</strong> Para agregar una receta es necesario que llene 
                              <br> todos los campos de lo contrario no se hara efectivo el registro'. 
                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Siguiente</button>
                            <div class="row">
                                <div class="table-responsive">
                                    <div class="col-md-6">
                                        <h4  style="text-align: center" >Ingredientes</h4>
                                        <hr>
                                        <table  id="example" border="1" class="table table-bordred table-striped" style="text-align: center" >
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Imagen</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php echo $tabla; ?>

                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="col-md-4" >
                                        <div id="carrito" class="panel panel-default" style="margin-top: 20%">
                                            <div  class="panel-heading">Ingredientes necesarios</div>
                                            <div  class="panel-body">

                                                <span id="total"> </span> 
                                                <span id="cant"> </span>
                                                <input type="hidden" name="ListaIngrediente" id="ListaIngrediente" >
                                            </div>
                                        </div>
                                    </div>  
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3>Paso 3</h3>
                            <div style="margin-top:10px; margin-bottom:20px;" class="alert alert-danger alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <strong>Importante!</strong> Para agregar una receta es necesario que llene 
                              <br> todos los campos de lo contrario no se hara efectivo el registro'. 
                            </div>
                            <diV class="row">
                                <div class="col-md-6">
                                    <h1>Cantidad</h1>
                                    <ul id="imprimir" class='list-group'>

                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-success btn-lg pull-right" name="guardar" type="submit">Finalizar</button>
                        </div>
                    </div>
                </div>
            </form>
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
        <script type="text/javascript" src="../Assets/js/jquery-ui.js" ></script>
        <script type="text/javascript" src="../Assets/js/jquery-ui.min.js" ></script>
        <script type="text/javascript" src="../Assets/bootstrap-3.3.4-dist/js/bootstrap.js" ></script>
        <script src="../Assets/js/jquery.dataTables.js"></script>
            <script class="init">

        $(document).ready(function() {
         $('#example').dataTable();

        } );
         </script>
        <script type="text/javascript">

            $(document).on('ready', function () {



                $('#selecion img').draggable({
                    helper: 'clone'
                });

                $("#autor").attr("disabled", "true");

                $('#carrito').droppable({
                    drop: EventoDrop
                });

                function  EventoDrop(evento, ui) {
                    var draggable = ui.draggable;

                    $("#autor").removeAttr("disabled");
                    var sabor = $('#ListaIngrediente').val();
                    var total = $('#total').text();
                    total = total.concat(draggable.data('ingrediente'));
                    sabor = sabor.concat(draggable.data('ingrediente'));

                    $('#ListaIngrediente').val(sabor);
                    $('#total').text(total);

                    var arreglo = [];
                    arreglo[arreglo.length] = draggable.data('ingrediente');

                    var lista = "";
                    lista += "<li class='list-group-item' >" + arreglo[0] + "<div class='col-md-4'> <input type='number' style='text-align:center' id='cantidad' class='cantidad' name=" + draggable.data('id') + " min='2' max='20' value='2' class='form-control input-md' > </div>  </li>";
                    $('#imprimir').append(lista);
                    ;
                }
            });

        </script>

        <script type="text/javascript">
            $(document).ready(function () {

                var navListItems = $('div.setup-panel div a'),
                        allWells = $('.setup-content'),
                        allNextBtn = $('.nextBtn');

                allWells.hide();

                navListItems.click(function (e) {
                    e.preventDefault();
                    var $target = $($(this).attr('href')),
                            $item = $(this);

                    if (!$item.hasClass('disabled')) {
                        navListItems.removeClass('btn-primary').addClass('btn-default');
                        $item.addClass('btn-primary');
                        allWells.hide();
                        $target.show();
                        $target.find('input:eq(0)').focus();
                    }
                });

                allNextBtn.click(function () {
                    var curStep = $(this).closest(".setup-content"),
                            curStepBtn = curStep.attr("id"),
                            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                            curInputs = curStep.find("input[type='text'],input[type='url']"),
                            isValid = true;

                    $(".form-group").removeClass("has-error");
                    for (var i = 0; i < curInputs.length; i++) {
                        if (!curInputs[i].validity.valid) {
                            isValid = false;
                            $(curInputs[i]).closest(".form-group").addClass("has-error");
                        }
                    }

                    if (isValid)
                        nextStepWizard.removeAttr('disabled').trigger('click');
                });

                $('div.setup-panel div a.btn-primary').trigger('click');
            });
        </script>
    </body>
</html>