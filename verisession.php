<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        session_destroy();
        echo 1;
    }
    else {
        echo 0;
    }
?>