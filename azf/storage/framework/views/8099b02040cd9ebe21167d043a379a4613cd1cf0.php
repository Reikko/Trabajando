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

                <ul class="nav navbar-pills navbar-nav navbar-right">
                    <li ><a data-toggle="pill" href="#inicio">Inicio</a></li>
                    <li class = "active"><a data-toggle="pill" href="#entrar"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
                    <!--<li><a data-toggle="pill" href="#alta"><span class="glyphicon glyphicon-user"></span> Registrarme</a></li>-->
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

                <div class="col-sm-4" style="background-color:lavender;">
                </div>

                <div class="col-sm-4">

                    <?php echo $__env->yieldContent('content'); ?>
                </div>

                <div class="col-sm-4" style="background-color:lavender;">
                </div>

                <div class="col-sm-4" style="background-color:lavender;">
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
