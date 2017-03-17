<?php
    session_start();
    //echo $_SESSION['usuario'];
    if(!isset($_SESSION['usuario'])){
        session_destroy();
        header("location: index.php");
    }
    include('BD/conexion.php');
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="image/x-icon" href="images/logo_montrer.png" rel="icon" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <!--<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!-- height="100px" width="352px"-->
        <!--<script src="/js/bootstrap.min.js"></script>-->
        <script src="js/sesion.js" type="text/javascript"></script>
        <title>Univerisdad Montrer</title>
    </head>
	<body onload="inicio()" onkeypress="reset()" onclick="reset()" onmousemove="reset()">
        <div class="header_sesion">
            <div style="display:block;">
                <img src="images/logomontrer.png" alt="logomontrer.png" class="session_logomontrer">
                <img src="images/ACRONIMO_UNIMO.png" alt="ACRONIMO_UNIMO.png" class="session_unimor img-responsive">
            </div>
        </div>
        <div class="cierra_sesion">
            <button class="btn btn-danger" onclick="location.href = 'cierra_sesion.php';" style="float:right; margin-right:10px; margin-top: 7px;"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion</button>
        </div>
        
		<?php include('datos_alumno.php'); ?>
	</body>
</html>