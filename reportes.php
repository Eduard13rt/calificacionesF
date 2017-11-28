<?php
/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2015 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2015 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    ##VERSION##, ##DATE##
 */
/** Error reporting */

//DATOS NECESARIOS PARA LA CONEXION A LA BASE DE DATOS
require('conn_db.php');
$consulta=mysql_query("SELECT * FROM Alumnos")or die(mysql_error());



error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');
if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');
/** Include PHPExcel */
require_once dirname(__FILE__) . '/excel/PHPExcel.php';
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

//ALINEACION DEL TEXTO
$objPHPExcel->getActiveSheet()
    ->getStyle('A:E')
    ->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

//TAMAÑO DE LA LETRA
 $objPHPExcel->getActiveSheet()
 	->getStyle('A1:E1')
 	->getFont()
 	->setSize(12);
//LETRA BOLD
$objPHPExcel->getActiveSheet()->getStyle('A1:E1')->getFont()->setBold(true);

//TAMAÑO ESPECIFICO DE CELDA
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(17);

//AUTO-SIZE
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(TRUE);
// Encabezados Excel
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Numero de control')
            ->setCellValue('B1', 'Password')
            ->setCellValue('C1', 'Nombre')
            ->setCellValue('D1', 'Correo')
            ->setCellValue('E1', 'Carrera');

$cola1="cacahuates";
//EJEMPLO DE LALO
$cont=2;
while($registro=mysql_fetch_array($consulta))
{
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$cont, $registro['noControlA'])
            ->setCellValue('B'.$cont, $registro['passwordA'])
            ->setCellValue('C'.$cont, $registro['nombreA'])
            ->setCellValue('D'.$cont, $registro['correo'])
            ->setCellValue('E'.$cont, $registro['carrera']);
$cont++;
}

// Set document properties
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Simple');
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="reporte.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');
// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;