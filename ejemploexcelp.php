<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('America/Mexico_City');

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

/** Include PHPExcel */
require_once dirname(__FILE__) . '/excel/PHPExcel.php';

// Create new PHPExcel object

$objPHPExcel = new PHPExcel();

// Set document properties
echo date('H:i:s') , " Set document properties" , EOL;
$objPHPExcel->getProperties()->setCreator("Daniel Trejo")
							 ->setLastModifiedBy("Quetzalcoatl")
							 ->setTitle("PHPExcel Test Document")
							 ->setSubject("PHPExcel Test Document")
							 ->setDescription("Test document for PHPExcel, generated using PHP classes.")
							 ->setKeywords("office PHPExcel php")
							 ->setCategory("Test result file");

$var = 10;
// Add some data
echo date('H:i:s') , " Add some data" , EOL;
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Hello')
            ->setCellValue('B2', 'world!')
            ->setCellValue('C1', 'Hello')
            ->setCellValue('D2', 'world!');

            for ($i=1;$i<10;$i++)
            {
            	$objPHPExcel->setActiveSheetIndex(0)
            		->setCellValue('E'.$i, $i)
            		->setCellValue('F'.$i, $i)
            		->setCellValue('G'.$i, $i);
            }
// Miscellaneous glyphs, UTF-8
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A4', 'Miscellaneous glyphs')
            ->setCellValue('A5', 'éàèùâêîôûëïüÿäöüç');


$objPHPExcel->getActiveSheet()->setCellValue('A8',"Hello\nWorld");
$objPHPExcel->getActiveSheet()->getRowDimension(8)->setRowHeight(-1);
$objPHPExcel->getActiveSheet()->getStyle('A8')->getAlignment()->setWrapText(true);


$value = "-ValueA\n-Value B\n-Value C";
$objPHPExcel->getActiveSheet()->setCellValue('A10', $value);
$objPHPExcel->getActiveSheet()->getRowDimension(10)->setRowHeight(-1);
$objPHPExcel->getActiveSheet()->getStyle('A10')->getAlignment()->setWrapText(true);
$objPHPExcel->getActiveSheet()->getStyle('A10')->setQuotePrefix(true);



// Rename worksheet
echo date('H:i:s') , " Rename worksheet" , EOL;
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle('Uno');


//Crea una segunda hoja

$objPHPExcel->createSheet();


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(1);
$objPHPExcel->setActiveSheetIndex(1)
            ->setCellValue('A1', 'Ya')
            ->setCellValue('B2', 'Estoy!')
            ->setCellValue('C1', 'en la')
            ->setCellValue('D2', 'página 2!');

            for ($i=1;$i<10;$i++)
            {
            	$objPHPExcel->setActiveSheetIndex(0)
            		->setCellValue('E'.$i, $i)
            		->setCellValue('F'.$i, $i)
            		->setCellValue('G'.$i, $i);
            }

$objPHPExcel->setActiveSheetIndex(1);
$objPHPExcel->getActiveSheet(1)->setTitle('Dos');

/*
// Save Excel 2007 file
echo date('H:i:s') , " Write to Excel2007 format" , EOL;
$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

echo date('H:i:s') , " File written to " , str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
echo 'Call time to write Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;
// Echo memory usage
echo date('H:i:s') , ' Current memory usage: ' , (memory_get_usage(true) / 1024 / 1024) , " MB" , EOL;


// Save Excel 95 file
echo date('H:i:s') , " Write to Excel5 format" , EOL;
$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save(str_replace('.php', '.xls', __FILE__));
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

echo date('H:i:s') , " File written to " , str_replace('.php', '.xls', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
echo 'Call time to write Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;
// Echo memory usage
echo date('H:i:s') , ' Current memory usage: ' , (memory_get_usage(true) / 1024 / 1024) , " MB" , EOL;


// Echo memory peak usage
echo date('H:i:s') , " Peak memory usage: " , (memory_get_peak_usage(true) / 1024 / 1024) , " MB" , EOL;

// Echo done
echo date('H:i:s') , " Done writing files" , EOL;
echo 'Files have been created in ' , getcwd() , EOL;
*/



$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
ob_end_clean();
$objWriter->save('ejemplofinal.xlsx');
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

