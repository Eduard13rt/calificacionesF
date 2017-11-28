<?php
require('fpdf/fpdf.php');


class PDF extends FPDF
{


// Cabecera de página
function Header()
{
    //header
    $this->Image('img/itqheader.png',25,10,150);
    //salto de linea
    $this->Ln(20);
    // Logo
    $this->Image('img/itq.png',85,35,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    //Salto de Linea para movernos abajo de la imagen
    $this->Ln(50);
    // Movernos a la derecha
    $this->Cell(54);

    // Título

    // <ancho celda>< alto celda>< texto>< qieres recuadro? > <posicion antes de invocar> <Alineacion del texto>
    $this->Cell(77,7,'Lista De Todos Los Profesores',0,0,'L');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(80,7,'PERIODO:Agosto-Diciembre',1,0,'L');
    $this->Cell(60,7,'FECHA: dd/mm/aaaa',1);
    $this->Cell(39,7,utf8_decode("CODIGO: XAIJ"),1);
    $this->Ln(7);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    //FRASE
    $this->Cell(0,10,'La tierra sera como sean los hombres',0,0,'C');
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');

}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
require('conn_db.php');

    session_start();
    $var= $_SESSION['user_prof'];

    //codigo para saber nombre del Profesor loggeado
    $consul=mysql_query("SELECT nombreP FROM Profesores WHERE noControlP = $var")or die(mysql_error());
    $regis=mysql_fetch_array($consul);
    $nom=$regis['nombreP'];

    
    $pdf->Cell(130,7,utf8_decode("SOLICITANTE IMPRESION: $nom"),1);
    $pdf->Cell(49,7,utf8_decode("PLANTEL: 123"),1);
    $pdf->Ln(20);


    //codigo imprimir Cabeceras de Alumnos
    $consulta=mysql_query("SELECT * FROM Profesores")or die(mysql_error());
    $registro=mysql_fetch_array($consulta);

        

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(39,8,utf8_decode("NO DE TARJETA"),"1");
        $pdf->Cell(70,8,utf8_decode("NOMBRE"),"1");
        $pdf->Cell(30,8,utf8_decode("AREA"),"1");
        $pdf->Cell(40,8,utf8_decode("CORREO"),"1");
        $pdf->Ln(8);
        $pdf->SetFont('Arial','',12);
        

do{


    $nocon=$registro['noControlP'];
    $nom=$registro['nombreP'];
    $email=$registro['correo'];
    $carr=$registro['area'];


    
            
    $pdf->Cell(39,8,utf8_decode($nocon),"1");
    $pdf->Cell(70,8,utf8_decode($nom),"1");
    $pdf->Cell(30,8,utf8_decode($carr),"1");
    $pdf->Cell(40,8,utf8_decode($email),"1");
    
    $pdf->ln(8);
    

    }
    while ($registro=mysql_fetch_array($consulta));
$pdf->Output();
?>