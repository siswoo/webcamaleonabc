<?php
include('script/conexion.php');
require 'resources/Spreadsheet/autoload.php';
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Nombre');
$sheet->setCellValue('B1', 'Telefono');
$sheet->setCellValue('C1', 'Correo');
$sheet->setCellValue('D1', 'Sede');
$sheet->setCellValue('E1', 'Pais');
$sheet->setCellValue('F1', 'Ciudad');
$sheet->setCellValue('G1', 'Comentario');
$sheet->setCellValue('H1', 'Fecha Registro');
$fila = 2;

$sql1 = "SELECT * FROM formulario_contacto1 WHERE fuente = 'LATAN'";
$consulta1 = mysqli_query($conexion,$sql1);
while($row1 = mysqli_fetch_array($consulta1)) {
	$id = $row1['id'];
	$nombre = $row1['nombre'];
	$telefono = $row1['telefono'];
	$correo = $row1['correo'];
	$edad = $row1['edad'];
	$pais = $row1['pais'];
	$ciudad = $row1['ciudad'];
	$mensaje = $row1['mensaje'];
	$fecha_inicio = $row1['fecha_creacion'];

	$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(40);
	$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(30);
	$spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(15);
	$spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(60);
	$spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(20);
	$spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(20);

	$sheet->setCellValue('A'.$fila, $nombre);
	$spreadsheet->getActiveSheet()->getCell('B'.$fila)->setValue($telefono);
	$spreadsheet->getActiveSheet()->getStyle('B'.$fila)->getNumberFormat()->setFormatCode('00');
	$sheet->setCellValue('C'.$fila, $correo);
	$sheet->setCellValue('D'.$fila, $edad);
	$sheet->setCellValue('E'.$fila, $pais);
	$sheet->setCellValue('F'.$fila, $ciudad);
	$sheet->setCellValue('G'.$fila, $mensaje);
	$sheet->setCellValue('H'.$fila, $fecha_inicio);
	$fila = $fila+1;
}

$fecha_inicio1 = date('Y-m-d');
$writer = new Xlsx($spreadsheet);
$writer->save('exportar latam1 '.$fecha_inicio1.'.xlsx');
header("Location: exportar latam1 ".$fecha_inicio1.".xlsx");

?>