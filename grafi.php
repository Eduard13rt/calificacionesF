<?php 


    session_start();
    $var= $_SESSION['user_prof'];

    include 'charts/charts.php';
    require('conn_db.php');
    /*
    require('conn_db.php');
    */
    

    $consulta=mysql_query("SELECT Alumnos_has_Materias.Alumnos_noControlA, Alumnos_has_Materias.cal1,
    Alumnos_has_Materias.cal2,Alumnos_has_Materias.cal3,Materias.nombre_materia
    FROM Materias, Profesores_has_Materias,  Alumnos_has_Materias
    WHERE ($var = Profesores_has_Materias.Profesores_noControlP) AND (Profesores_has_Materias.Materias_idMaterias = Alumnos_has_Materias.Materias_idMaterias) AND (Profesores_has_Materias.Materias_idMaterias = Materias.idMaterias)")or die(mysql_error());


    
    
    $query = sprintf("select nombre_materia from Materias");
    $qAlumno = sprintf("select nombreA FROM Alumnos");
    
    $qData = sprintf("SELECT  Alumnos_has_Materias.cal1
    FROM Materias, Profesores_has_Materias,  Alumnos_has_Materias
    WHERE ($var = Profesores_has_Materias.Profesores_noControlP) AND (Profesores_has_Materias.Materias_idMaterias = Alumnos_has_Materias.Materias_idMaterias) AND (Profesores_has_Materias.Materias_idMaterias = Materias.idMaterias");


    
    $chart['chart_data'][0][0] = "";
    
    $result=mysqli_query($link, $query);
    $alumnos = mysqli_query($link, $qAlumno);
    $data = mysqli_query($link, $qData);
    $num = mysqli_num_rows($result);
    $i=1; $j=1; $k=1;
    while ($row = mysqli_fetch_assoc($result))
    {
        $chart['chart_data'][$i][0]= $row['nombre_materia'];
        while ($col =mysqli_fetch_assoc($data) )
        {
            if($j<=$num){
                $chart['chart_data'][$i][$j]=$col['cal1'];
            }
            $j++;
            if($j>$num){
                $j=1;
                break;
            }
        }
        $i++;
    }
    $i=1;
    while ($row = mysqli_fetch_assoc($alumnos))
    {
        $chart['chart_data'][0][$i]= $row['nombreA'];
        $i++;
    }
    
    //send the new data to charts.swf
    SendChartData ( $chart );
?>