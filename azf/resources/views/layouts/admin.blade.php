<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style type="text/css">

    </style>
</head>
<body>

<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">AZF</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Estado<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>{!!link_to_route('edo.index', $title = 'Mostrar Estados')!!}</li>
                            <li>{!!link_to_route('edo.create', $title = 'Agregar Estado')!!}</li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Colonias<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>{!!link_to_route('colonias.index', $title = 'Mostrar Colonia')!!}</li>
                            <li>{!!link_to_route('colonias.create', $title = 'Crear Colonia')!!}</li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Fraccionamiento<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>{!!link_to_route('fr.index', $title = 'Mostrar Fraccionamiento')!!}</li>
                            <li>{!!link_to_route('fr.create', $title = 'Crear Fraccionamiento')!!}</li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Clientes<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>{!!link_to_route('cliente.index', $title = 'Mostrar Clientes')!!}</li>
                            <li>{!!link_to_route('cliente.create', $title = 'Crear Cliente')!!}</li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>


                </ul>
                <ul class="nav navbar-pills navbar-nav navbar-right">
                    <li ><a data-toggle="pill" href="#inicio">Inicio</a></li>
                    <li class = "active"><a data-toggle="pill" href="#entrar"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="tab-content">
        <div id="inicio" class="tab-pane fade">
            <p></p>
        </div>

        <div id="entrar" class="tab-pane fade  in active">
            <div class="container-fluid">

                <div class="col-sm-3" style="background-color:lavender;">
                    @yield('fraccion')
                </div>

                <div class="col-sm-6">
                    @yield('content')
                    {!!Html::script('js/drop.js')!!}
                </div>

                <div class="col-sm-3" style="background-color:lavender;">
                </div>

            </div>
        </div>


        <div id="ver2" class="tab-pane fade">

        </div>

    </div>



</div>



<!-- Latest compiled and minified JavaScript -->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
