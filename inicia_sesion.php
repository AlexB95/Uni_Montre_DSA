<?php
    include('BD/conexion.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["username"] != ""){
            $usuario = $_POST["username"];
        }
        if ($_POST["password"] != ""){
            $password = hash('sha256', sha1(md5($_POST["password"])));
        }
        $query = "SELECT * FROM usuarios WHERE ID_Usuario = '$usuario'";
        $Resultado=mysqli_query($conn,$query);
        while($MostrarFila=mysqli_fetch_array($Resultado)){
            $DB_Pass = $MostrarFila['Pass'];
            $DB_TipoUsuario = $MostrarFila['Tipo_Usuario'];
        }
        if($password == $DB_Pass && $DB_TipoUsuario == "Alumno"){
            session_start();
            $_SESSION['usuario'] = $usuario;
            header('Location: inicio_alumno.php');
        }
        else if ($password == $DB_Pass && $DB_TipoUsuario == "Administrador"){
            
        }
        else {
            session_start();
            $_SESSION['err'] = '<div class="alert alert-danger alerta">
  <strong>Usuario y/o contraseña incorrectos.</strong></div>';
            header('Location: index.php');
        }
    }
?>