<!DOCTYPE html>
<html lang="Es-es" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Sistema de Control de Vehículo para Talleres y Seguros</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <script src="../js/jquery.min.js"></script>
    <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.min.css">
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-btn navbar-static-top">
    <div class="container-alf">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sicovets</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav center">
                <li>
                    <a href="main.php"><i class="fa fa-home"></i><span aria-hidden="true" class="hightop-home"></span> Inicio</a>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="#">
                        <span aria-hidden="true" class="hightop-forms"></span>Reportes<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="form-components.html">Recepción de Vehiculo</a>
                        </li>
                        <li>
                            <a href="form-advanced.html">Reporte de Aseguradora</a>
                        </li>
                        <li>
                            <a href="xeditable.html">Estados de Cuenta</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="#">
                        <i class="fa fa-table"></i>
                        <span aria-hidden="true" class="hightop-tables"></span> Registros<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="tables.html">Basic tables</a>
                        </li>
                        <li>
                            <a href="datatables.html">DataTables</a>
                        </li>
                        <li>
                            <a href="datatables-editable.html">Editable DataTables</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="charts.html">
                        <span aria-hidden="true" class="hightop-charts"></span>Charts</a>
                </li>
                <li class="dropdown"><a data-toggle="dropdown" href="#">
                        <span aria-hidden="true" class="hightop-pages"></span>Pages<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="chat.html">Chat</a>
                        </li>
                        <li>
                            <a href="calendar.html">Calendar</a>
                        </li>
                        <li>
                            <a href="timeline.html">Timeline</a>
                        </li>
                        <li>
                            <a href="login1.html">Login 1</a>
                        </li>
                        <li>
                            <a href="login2.html">Login 2</a>
                        </li>
                        <li>
                            <a href="messages.html">Messages/Inbox</a>
                        </li>
                        <li>
                            <a href="pricing.html">Pricing Tables</a>
                        </li>
                        <li>
                            <a href="signup1.html">Sign Up 1</a>
                        </li>
                        <li>
                            <a href="signup2.html">Sign Up 2</a>
                        </li>
                        <li>
                            <a href="invoice.html">Invoice</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="filters.html">Filter Results</a>
                        </li>
                        <li>
                            <a href="404-page.html">404 Page</a>
                        </li>
                        <li>
                            <a href="500-page.html">500 Error</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="gallery.html"><i class="fa fa-image"></i>
                    <span aria-hidden="true" class="hightop-gallery"></span> Galeria</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="../index.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container-fluid">
    <div class="row content">
        <section class="content-siderbar">
                <!-- Lista de rutas--->
                <ol class="breadcrumb list-inline">
                    <li class="active"><i class="fa fa-home"></i> <a href="main.php"> Inicio</a></li>
                </ol>
            <hr>
            <div class="row">
                <div class="col-sm-offset-1 col-sm-1"></div>
                <div class="col-sm-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-car fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>Vehiculos</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-archive fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>Archivos</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-opencart fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>Ordenes</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-fire fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Retrasos</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <div class="container-fluid" style="background-color: rgba(34,34,34,0.1);">
            <div class="container">
                <div class="btn-group-xs text-center">
                    <button type="button" class="buttons btn-success"><i class="fa fa-car fa-2x"></i><br>Agregar</button>
                    <button type="button" class="buttons btn-success"><i class="fa fa-car fa-2x"></i><br>Eliminar</button>
                    <button type="button" class="buttons btn-success"><i class="fa fa-file-text-o fa-2x"></i><br>&nbsp Polizas &nbsp</button>
                    <button type="button" class="buttons btn-warning"><i class="fa fa-file-image-o fa-2x"></i><br>Imagenes</button>
                    <button type="button" class="buttons btn-danger"><i class="fa fa-fire fa-2x"></i><br>Eliminar</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="jumbotron-alf">
                <h1>Navbar example</h1>
                <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
                <p>To see the difference between static and fixed top navbars, just scroll.</p>
                <p>
                    <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs »</a>
                </p>
            </div>
            <div class="jumbotron-alf">
                <h1>Navbar example</h1>
                <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
                <p>To see the difference between static and fixed top navbars, just scroll.</p>
                <p>
                    <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs »</a>
                </p>
            </div>
            <div class="jumbotron-alf">
                <h1>Navbar example</h1>
                <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
                <p>To see the difference between static and fixed top navbars, just scroll.</p>
                <p>
                    <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs »</a>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
<footer class="footer_login" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-offset-2 col-sm-1 text-center"><i class="fa fa-twitter fa-3x"></i></div>
            <div class="col-sm-1 text-center"><i class="fa fa-facebook fa-3x"></i></div>
            <div class="col-sm-1 text-center"><i class="fa fa-instagram fa-3x"></i></div>
            <div class="col-sm-1 text-center"><i class="fa fa-youtube-square fa-3x"></i></div>
            <div class="col-sm-1 text-center"><i class="fa fa-skype fa-3x"></i></div>
            <div class="col-sm-1 text-center"><i class="fa fa-snapchat fa-3x"></i></div>
            <div class="col-sm-1 text-center"><i class="fa fa-linkedin fa-3x"></i></div>
            <div class="col-sm-1 text-center"><i class="fa fa-google fa-3x"></i></div>
        </div>
    </div>
</footer>
</html>







