<!DOCTYPE html>
<html lang="es" >
    <head>
        <meta charset="UTF-8" >
        <title>NuevasRecetas</title>
        <link rel="stylesheet" type="text/css" href="../Assets/bootstrap-3.3.4-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../Assets/fonts/style.css">
        <style type="text/css">
            body{ 
                margin-top:40px; 
            }

            .stepwizard-step p {
                margin-top: 10px;
            }

            .stepwizard-row {
                display: table-row;
            }

            .stepwizard {
                display: table;
                width: 100%;
                position: relative;
            }

            .stepwizard-step button[disabled] {
                opacity: 1 !important;
                filter: alpha(opacity=100) !important;
            }

            .stepwizard-row:before {
                top: 14px;
                bottom: 0;
                position: absolute;
                content: " ";
                width: 100%;
                height: 1px;
                background-color: #ccc;
                z-order: 0;

            }

            .stepwizard-step {
                display: table-cell;
                text-align: center;
                position: relative;
            }

            .btn-circle {
                width: 30px;
                height: 30px;
                text-align: center;
                padding: 6px 0;
                font-size: 12px;
                line-height: 1.428571429;
                border-radius: 15px;
            }

        </style>
    </head>
    <body>

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
            <form role="form" action="formulario.php" method="POST">
                <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Paso 1</h3>
                            <br>
                            <table  cellspacing="20" >
                                <tr>
                                    <td>  <label class="col-md-4 control-label" >Titulo:</label> </td>
                                    <td>  <input name="titulo" type="text" placeholder="Nombre de su receta" class="form-control input-md" > </td>
                                </tr>
                                <tr>
                                    <td> <hr> </td>
                                    <td> <hr> </td>
                                </tr>
                                <tr>
                                    <td>  <label  class="col-md-4 control-label" >Descripción:</label> </td>
                                    <td>  <textarea name="descripcion" placeholder="Paso a paso receta" class="form-control input-md" rows="4" cols="50" ></textarea> </td>
                                </tr>
                                <tr>
                                    <td> <hr> </td>
                                    <td> <hr> </td>
                                </tr>
                                <tr>
                                    <td>  <label class="col-md-3 control-label" >Porciones:</label> </td>
                                    <td>  <input name="porciones" type="number" min="2" max="20" value="2" class="form-control input-md" > </td>
                                </tr>
                                <tr>
                                    <td> <hr> </td>
                                    <td> <hr> </td>
                                </tr>
                                <tr>
                                    <td>  <label class="col-md-3 control-label" >Autor:</label> </td>
                                    <td>  <input name="autor" style="text-align: center" type="text" placeholder="Nombre usuario" class="form-control input-md" > </td>
                                </tr>
                            </table>  

                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Siguiente</button>

                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3>Paso 2</h3>
                            <br>
                            <div class="row">
                                <div class="table-responsive">
                                    <div class="col-md-6">
                                        <h4  style="text-align: center" >Ingredientes</h4>
                                        <hr>
                                        <table border="1" class="table table-bordred table-striped" style="text-align: center" >
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Cantidad</th>
                                                    <th>Imagen</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php echo $tabla; ?>

                                            </tbody>
                                        </table>
                                        
                                    </div>
                                    <div class="col-md-4" >
                                        <div class="panel panel-default" style="margin-top: 20%">
                                            <div  class="panel-heading">Ingredientes necesario</div>
                                            <div id="carrito" class="panel-body">
                                                
                                                <span id="total"> </span> 
                                                <span id="cant"> </span>
                                                <!-- <span class="badge">14</span> -->
                                                <input type="hidden" name="a" id="a" >
                                            </div>
                                        </div>
                                    </div>  
                                </div>

                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Siguiente</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3>Paso 3</h3>
                            <button class="btn btn-success btn-lg pull-right" type="submit">Finalizar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <script type="text/javascript" src="../Assets/js/jquery-1.11.2.js" ></script>
        <script type="text/javascript" src="../Assets/js/jquery-ui.js" ></script>
        <script type="text/javascript" src="../Assets/js/jquery-ui.min.js" ></script>
        <script type="text/javascript" src="../Assets/bootstrap-3.3.4-dist/js/bootstrap.js" ></script>
        <script type="text/javascript">

            $(document).on('ready', function () {
                
                $('#selecion img').draggable({
                    helper: 'clone'
                });
                

                $('#carrito').droppable({
                    drop: EventoDrop
                });

                function  EventoDrop(evento, ui) {
                    var draggable = ui.draggable;

                    var total = $('#total').text();
                    total = total.concat(draggable.data('ingrediente'));
                    $('#total').text(total);



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