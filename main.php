<!DOCTYPE html>
<html lang="Es-es" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Sistema de Control de Vehículo para Talleres y Seguros</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="css/bootstrap-responsive.min.css">-->
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body class="wrapper">
    <nav class="navbar-btn">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Sicovets</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Archivo</a></li>
                <li><a href="#">Edicion</a></li>
                <li><a href="#">Ejecución</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-2">
                <aside class="main-sidebars">
                    <ul class=sidebar-menu>
                        <li class="header">MENU DE NAVEGACIÓN</li>
                        <form action="#" method="get" class="sidebar-form">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Buscar...">
                                  <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                                  </span>
                            </div>
                        </form>
                        <li><a href="#"><i class="fa fa-dashboard"></i><span>Estadisticas</span></a></li>
                        <li><a href="#"><i class="fa fa-files-o"></i><span>Opciones</span></a></li>
                        <li><a href="pages/widgets.html"><i class="fa fa-th"></i><span>Medidores</span></a></li>
                        <li><a href="#"><i class="fa fa-pie-chart"></i><span>Gráficas</span></a>
                            <!--<ul class="treeview-menu">
                                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i>Graficas General</a></li>
                            </ul>-->
                        </li>
                        <li><a href="#"><i class="fa fa-laptop"></i><span>Piezas</span></a>
                            <!--<ul class="treeview-menu">
                                <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Latoneria</a></li>
                                <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Mecanica</a></li>
                                <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Electrica</a></li>
                            </ul>-->
                        </li>
                        <li><a href="#"><i class="fa fa-edit"></i> <span>Formulario</span></a></li>
                        <li><a href="#"><i class="fa fa-table"></i> <span>Tables</span></a></li>
                        <li><a href="pages/calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
                        <li><a href="pages/mail.html"><i class="fa fa-envelope"></i> <span>Correo</span></a></li>
                        <li><a href="pages/info.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                    </ul>
                </>
            </div>
            <div class="col-sm-10">
                <div class="container-fluid">
                    <section class="content-siderbar">
                        <div class="col-sm-12">
                            <h1>Control de estadistica</h1>
                            <!-- Lista de rutas--->
                            <ol class="breadcrumb">
                                <li class="active"><i class="fa fa-dashboard"></i> <a href="main.php">Dashboard</a></li>
                                <!--<li><i class="fa fa-bar-chart-o"></i> Control</li>-->
                            </ol>
                        </div>
                        <hr>
                        <!---------        ------->
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-3">
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
                            <div class="col-lg-3 col-md-6 col-sm-3">
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
                            <div class="col-lg-3 col-md-6 col-sm-3">
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
                            <div class="col-lg-3 col-md-6 col-sm-3">
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
                        <hr>
                        <h2>I Love Food</h2>
                        <h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>
                        <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>
                        <p>Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <br><br>

                        <h4><small>RECENT POSTS</small></h4>
                        <hr>
                        <h2>Officially Blogging</h2>
                        <h5><span class="glyphicon glyphicon-time"></span> Post by John Doe, Sep 24, 2015.</h5>
                        <h5><span class="label label-success">Lorem</span></h5><br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <hr>

                        <h4>Leave a Comment:</h4>
                        <form role="form">
                            <div class="form-group">
                                <textarea class="form-control" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                        <br><br>

                        <!--<p><span class="badge">2</span> Comments:</p><br>

                        <div class="container-fluid">
                            <div class="col-sm-2 text-center">
                                <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
                            </div>
                            <div class="col-sm-10">
                                <h4>Anja <small>Sep 29, 2015, 9:12 PM</small></h4>
                                <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <br>
                            </div>
                            <div class="col-sm-2 text-center">
                                <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
                            </div>
                            <div class="col-sm-10">
                                <h4>John Row <small>Sep 25, 2015, 8:25 PM</small></h4>
                                <p>I am so happy for you man! Finally. I am looking forward to read about your trendy life. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <br>
                                <p><span class="badge">1</span> Comment:</p><br>
                                <div class="row">
                                    <div class="col-sm-2 text-center">
                                        <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
                                    </div>
                                    <div class="col-xs-10">
                                        <h4>Nested Bro <small>Sep 25, 2015, 8:28 PM</small></h4>
                                        <p>Me too! WOW!</p>
                                        <br>
                                    </div>
                                </div>
                            </div>-->
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
<footer id="footer" >
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-3 text-center"><i class="fa fa-twitter fa-3x"></i><br>Twitter</div>
            <div class="col-sm-3 text-center"><i class="fa fa-facebook fa-3x"></i><br>Facebook</div>
            <div class="col-sm-3 text-center"><i class="fa fa-instagram fa-3x"></i><br>Instagram</div>
            <div class="col-sm-3 text-center"><i class="fa fa-github fa-3x"></i></br>Github</div>
        </div><br>
        <div class="row">
            <div class="col-sm-3"><img src="imagen/Chevrolet.png" class="img-responsive" style="width:200px; height:100px;/"></div>
            <div class="col-sm-3"><img src="imagen/Ford.png" class="img-responsive" style="width:200px; height:100px;"/></div>
            <div class="col-sm-3"><img src="imagen/Toyota.png" class="img-responsive" style="width:200px; height:100px;"/></div>
            <div class="col-sm-3"><img src="imagen/jeep.png" class="img-responsive" style="width:200px; height:100px;"/></div>
        </div>
    </div>
</footer>
</body>
</html>







