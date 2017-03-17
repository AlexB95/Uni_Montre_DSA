<?php
    //$conexion = new mysqli("mysql.hostinger.mx","u559137235_admin","root21","u559137235_games");
    $conn = new mysqli("localhost","root","","evaluacion_montrer");
    //$conn = new mysqli("93.188.160.191","u910659393_montr","dsaunimontrer","u910659393_montr");
    if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_set_charset($conn,"utf8");
?>