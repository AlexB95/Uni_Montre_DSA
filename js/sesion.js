    var time;
    function inicio() { 
    time = setTimeout(function() { 
            $(document).ready(function(e) {
                $.ajax({
                    url:'verisession.php',
                    type:'POST',
                    data:'veri=1',
                    success: function(data){
                        if(data == 1){
                            alert("Sesion Caducada");
                            document.location.href='index.php';
                        }			
                    }	
                });
            });
        }, 1800000);//fin timeout cada 1800000 30 minutos 1000 = 1 seg
    }//fin inicio
    function reset() {
        clearTimeout(time);//limpia el timeout para resetear el tiempo desde cero 
        time = setTimeout(function() { 
            $(document).ready(function(e) {
                $.ajax({
                    url:'verisession.php',
                    type:'POST',
                    data:'veri=1',
                    success: function(data){			
                        if(data == 1){
                            alert("Sesion Caducada");
                            document.location.href='index.php';
                        }			
                    }	
                });
            });
        },1800000);//fin timeout
    }//fin reset