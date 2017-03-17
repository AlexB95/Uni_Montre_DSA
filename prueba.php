<?php
//echo hash('sha256', sha1(md5('10227')));
session_start();
$_SESSION['usuario']="hola";
?>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript">
            var time;
            var data2='veri_1';
            function inicio() { 
              time = setTimeout(function() { 
                $(document).ready(function(e) {
                $.ajax({
                    url:'verisession.php',
                    type:'POST',
                    data: data2,
                    success: function(data){
                        if(data == 1)
                        {
                            //alert("Sesion Caducada");
                                //document.location.href='index.php';			   
                        }			
                    }	

                });
            });
                },3000);//fin timeout cada 30 minutos 1000 = 1 seg
            }//fin inicio

            function reset() {
                alert("Hola");
              clearTimeout(time);//limpia el timeout para resetear el tiempo desde cero 
              time = setTimeout(function() { 
                $(document).ready(function(e) {
                $.ajax({
                    url:'verisession.php',
                    type:'POST',
                    data:'veri=1',
                    success: function(data){			
                        if(true)
                        {
                           //alert("Sesion Caducada");
                           document.location.href='verisession.php';			   

                        }			
                    }	

                });
            });
                },3000);//fin timeout
            }//fin reset
            </script> 
        <style>
div {
    width: 200px;
    height: 100px;
    border: 1px solid black;
}
</style>
    </head>
    <body onload="inicio()" onkeypress="reset()" onclick="reset()" onmousemove="reset()">
        <div onmousemove="myFunction(event)" onmouseout="clearCoor()"></div>

<p>Mouse over the rectangle above, and get the coordinates of your mouse pointer.</p>

<p>When the mouse is moved over the div, the p element will display the horizontal and vertical coordinates of your mouse pointer, whose values are returned from the clientX and clientY properties on the 
MouseEvent object.</p>

<p id="demo"></p>

<script>
function myFunction(e) {
    var x = e.clientX;
    var y = e.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";
    document.getElementById("demo").innerHTML = coor;
}

function clearCoor() {
    document.getElementById("demo").innerHTML = "";
}
</script>
    </body>
    
    
</html>