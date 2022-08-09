<?php

require '../resources/Spreadsheet/autoload.php';



use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use PhpOffice\PhpSpreadsheet\RichText\RichText;

use PhpOffice\PhpSpreadsheet\Shared\Date;

use PhpOffice\PhpSpreadsheet\Spreadsheet;

use PhpOffice\PhpSpreadsheet\Style\Color;

use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

$spreadsheet = new Spreadsheet();

$sheet = $spreadsheet->getActiveSheet();



include('../script/conexion.php');



$sheet->setCellValue('A1', 'Nombre');
$sheet->setCellValue('B1', 'Correo');
$sheet->setCellValue('C1', 'Telefono');
$sheet->setCellValue('D1', 'Mensaje');
$sheet->setCellValue('E1', 'Fuente');


$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(30);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(50);
$spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(20);

$fila = 2;

$sql1 = "SELECT * FROM formulario_contacto1";
$consulta1 = mysqli_query($conexion,$sql1);
while($row1 = mysqli_fetch_array($consulta1)) {
	$nombre = $row1['nombre'];
	$correo = $row1['correo'];
	$telefono = $row1['telefono'];
	$mensaje = $row1['mensaje'];
	$fuente = $row1['fuente'];

	$sheet->setCellValue('A'.$fila, $nombre);
	$sheet->setCellValue('B'.$fila, $correo);
	$sheet->setCellValue('C'.$fila, $telefono);
	$sheet->setCellValue('D'.$fila, $mensaje);
	$sheet->setCellValue('E'.$fila, $fuente);

	$fila = $fila+1;
}

$fecha_inicio = date('Y-m-d');
$writer = new Xlsx($spreadsheet);
$writer->save('web '.$fecha_inicio.'.xlsx');
header("Location: web ".$fecha_inicio.".xlsx");
?>