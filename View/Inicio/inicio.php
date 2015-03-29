<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio</title>

    <link rel="stylesheet" type="text/css" href="../Assets/bootstrap-3.3.4-dist/css/bootstrap.css">
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
                                <li><a href='profile.html'><span class='glyphicon glyphicon-user'></span> <?php echo $_SESSION["Nombre"];?></a></li>
                                <li><a href="#"><span class="fa fa-bell"></span></a></li>
                                <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="profile.html">Perfil</a></li>
                                        <li><a href="usuarios2.html">Cuenta</a></li>
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

	<div id="encabezado">
	<br>
	<br>
	<br>
	<br>
	  <h1>Bienvenido Querido <?php echo $_SESSION['Rol']; ?></h1>
	 
	</div>

<script type="text/javascript" src="../Assets/js/jquery-1.11.2.js" ></script>
<script type="text/javascript" src="../Assets/bootstrap-3.3.4-dist/js/bootstrap.js" ></script>

</body>

</html>
