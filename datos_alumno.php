<?php

    $query = "SELECT * FROM alumnos WHERE Matricula = '".$_SESSION['usuario']."'";
    $Resultado=mysqli_query($conn,$query);
    while($MostrarFila=mysqli_fetch_array($Resultado)){
        $Matricula = $MostrarFila['Matricula'];
        $Nombre = $MostrarFila['Nombre'];
        $Grupo = $MostrarFila['Grupo'];
    }

    echo '<div class="jumbotron logg" id="contenedor">
            <div class="encabezado">
                <h3 >Datos del alumno</h3>
            </div>
            <div id="contenedor_datos">
                <h4>Matricula: '.$Matricula.'</h4>
                <h4>Nombre:'.$Nombre.'</h4>
                <h4>Grupo:'.$Grupo.'</h4>
            </div>
        </div>';
    echo '<div class="jumbotron logg" id="contenedor_materias">
            <div class="encabezado">
                <h3 >Materias a evaluar</h3>
            </div>
            <div class="container">
            <table class="table table-hover table-striped table-responsive" id="materia_alumno">
                <thead>
                  <tr>
                    <th>Materia</th>
                    <th>Profesor</th>
                  </tr>
                </thead>
                <tbody>';

    $query = "SELECT ID_Materia, Nombre_Materia, Nombre_Profesor FROM materiaProfesor WHERE ID_Grupo = '".$Grupo."'";
    $Resultado=mysqli_query($conn,$query);
    while ($MostrarFila=mysqli_fetch_array($Resultado)) {
        $Materia = $MostrarFila['Nombre_Materia'];
        $Profesor = $MostrarFila['Nombre_Profesor'];
        $boton = "location.href = 'evalua.php?materia=".$MostrarFila['ID_Materia']."&matricula=".$Matricula."';";
        echo '<tr class="fila_alumnoprof">
                <td>'.$Materia.'</td>
                <td>'.$Profesor.'</td>
                <td>
                <button class="btn btn-primary" onclick="'.$boton.'" style="float:right; margin-right:10px; margin-top: 7px;"><span class="glyphicon glyphicon-check"></span> Evaluar</button></td>
            </tr>';
    }
    echo '    </tbody>
            </table>
            </div>
        </div>';
?>