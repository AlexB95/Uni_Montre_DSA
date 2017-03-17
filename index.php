<?php
    session_start();
    $err = "";
    if(isset($_SESSION['err'])){
        $err = $_SESSION['err'];
        session_destroy();
    }
    else if(isset($_SESSION['usuario'])){
            session_destroy();
        }
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
        <script src="/js/bootstrap.min.js"></script>
        <title>Univerisdad Montrer</title>
    </head>
	<body>
	<div class="header">
        <!--<img src="images/logomontrer.png" alt="logomontrer" height="200px" width="227px" class="center">--><br>
	</div>
		<div class="jumbotron logg" id="contenedor">
			<div class="encabezado">
				<h3 >Sistema de Evaluación Docente</h3>	
			</div>
				<form method="POST" name="flogg" id="flogg" action="inicia_sesion.php">
					<label>Matrícula:</label>
					<input type="text" name="username" id="username" class="form-control" placeholder="Ingresa tu matrícula" required>
					<label>Contraseña:</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Ingresa tu contraseña" required >
                    <?php echo $err;?>
					<input type="submit" class="btn btn-success" value="INGRESAR">
				</form>
		</div>
        <footer>
            <img src="images/ACRONIMO_UNIMO.png" alt="ACRONIMO_UNIMO.png" height="100px" width="352px" class="center">
        </footer>
	</body>
</html>