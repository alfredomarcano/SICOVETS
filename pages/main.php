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
                            <a href="form-components.html">Ficha del Vehiculos</a>
                        </li>
                        <li>
                            <a href="form-advanced.html">Ficha de Cliente</a>
                        </li>
                        <li>
                            <a href="xeditable.html">Ficha Aseguradora</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="#">Ficha Tecnica</a>
                        </li>
                        <li>
                            <a href="#"></a>
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
            <div class="container" >
                <div class="row">
                    <div class="btn-group-xs text-center">
                        <!--<a class="buttons btn-primary" href="#" role="button"><i class="fa fa-car fa-2x"></i><br>Galería</a>-->
                        <a class="buttons btn-success" href="#" role="button"><i class="fa fa-car fa-2x"></i><br>Agregar</a>
                        <a class="buttons btn-success" href="#" role="button"><i class="fa fa-car fa-2x"></i><br>Eliminar</a>
                        <a class="buttons btn-success" href="#" role="button"><i class="fa fa-file-text-o fa-2x"></i><br>&nbsp Polizas &nbsp</a>
                        <a class="buttons btn-warning" href="../pages/gallery.html" role="button"><i class="fa fa-file-image-o fa-2x"></i><br>Imagenes</a>
                        <a class="buttons btn-danger" href="#" role="button"><i class="fa fa-fire fa-2x"></i><br>Eliminar</a>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section>
            <div class="container-fluid">
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
                <div class="col-sm-8">
                    <div class="col-sm-12 bg-warning">
                        <div class="col-sm-6">
                            <h4>Network Activities<br>
                                <small>Graph title sub-title</small>
                            </h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; margin-top:10px; border: 1px solid #ccc">
                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                <span>June 24, 2016 - July 23, 2016</span> <b class="caret"></b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 bg-danger">
                        
                        <div>
                            <div class="flot-tick-label tickLabel">Jan 02</div>
                            <div class="flot-tick-label tickLabel">Jan 03</div>
                            <div class="flot-tick-label tickLabel">Jan 04</div>
                            <div class="flot-tick-label tickLabel">Jan 05</div>
                            <div class="flot-tick-label tickLabel">Jan 06</div>
                            <div class="flot-tick-label tickLabel">Jan 07</div>
                        </div>
                        <div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 242px; left: 13px; text-align: right;">0</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 223px; left: 7px; text-align: right;">10</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 204px; left: 7px; text-align: right;">20</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 186px; left: 7px; text-align: right;">30</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 167px; left: 7px; text-align: right;">40</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 149px; left: 7px; text-align: right;">50</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 130px; left: 7px; text-align: right;">60</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 112px; left: 7px; text-align: right;">70</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 93px; left: 7px; text-align: right;">80</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 75px; left: 7px; text-align: right;">90</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 56px; left: 1px; text-align: right;">100</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 38px; left: 2px; text-align: right;">110</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 19px; left: 1px; text-align: right;">120</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">130</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 bg-warning">
                        <div class="x_title">
                            <h2>Leyenda</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div>
                            <p>Facebook Campaign</p>
                            <div class="">
                                <div class="progress progress_sm" style="border: 1px solid #4C4C4C">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80" aria-valuenow="79" style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>Twitter Campaign</p>
                            <div class="">
                                <div class="progress progress_sm" style="border: 1px solid #4C4C4C">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60" aria-valuenow="59" style="width: 60%;"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>Conventional Media</p>
                            <div class="">
                                <div class="progress progress_sm" style="border: 1px solid #4C4C4C">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40" aria-valuenow="39" style="width: 40%;"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>Bill boards</p>
                            <div class="">
                                <div class="progress progress_sm" style="border: 1px solid #4C4C4C">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="49" style="width: 50%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

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
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div id="copy">© 2016 Highcharts. All rights reserved.</div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="redes">
                <div>
                    <a href="https://www.facebook.com/Highcharts" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/Highcharts" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="http://www.linkedin.com/company/highsoft-solutions-as" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                    <a href="https://github.com/highslide-software/highcharts.com" title="Github"><i class="fa fa-github"></i></a>
                    <a href="https://www.youtube.com/channel/UCzxXofPTQ0DoT7uIy3Fxw7A"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>







