<?php 

session_start();

$var= $_SESSION['user_prof'];
    require ('charts/charts.php');
    require('conn_db.php');
    
    $query1 = mysql_query("SELECT nombre_materia from Materias");
    $query2 = mysql_query("SELECT   nombreA FROM Alumnos");
  $consulta=mysql_query("SELECT Alumnos_has_Materias.cal1
    FROM Materias, Profesores_has_Materias,  Alumnos_has_Materias
    WHERE ($var = Profesores_has_Materias.Profesores_noControlP) AND (Profesores_has_Materias.Materias_idMaterias = Alumnos_has_Materias.Materias_idMaterias) AND (Profesores_has_Materias.Materias_idMaterias = Materias.idMaterias)")or die(mysql_error());
    
    $chart['chart_data'][0][0] = "";
    $renglones = mysql_num_rows($query1);

    $i=1; $j=1; $k=1;
    while ($row= mysql_fetch_array($query1))
    {
        $chart['chart_data'][$i][0]= $row['nombre_materia'];
        while ($col =mysql_fetch_array($consulta) )
        {
            if($j<=$renglones){
                $chart['chart_data'][$i][$j]=$col['cal1'];
            }
            $j++;
            if($j>$renglones){
                $j=1;
                break;
            }
        }
        $i++;
    }
    $i=1;
    while ($row = mysql_fetch_array($query2))
    {
        $chart['chart_data'][0][$i]= $row['nombreA'];
        $i++;
    }
    //send the new data to charts.swf
    SendChartData ( $chart );
?>