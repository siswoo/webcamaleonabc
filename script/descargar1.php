<?php
session_start();
include('conexion.php');
require '../resources/Spreadsheet/autoload.php';
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
$fecha_inicio = date('Y-m-d');

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Nombre');
$sheet->setCellValue('B1', 'Correo');
$sheet->setCellValue('C1', 'Teléfono');
$sheet->setCellValue('D1', 'Edad');
$sheet->setCellValue('E1', 'Mensaje');
$sheet->setCellValue('F1', 'Estatus');
$sheet->setCellValue('G1', 'Fecha Creación');
$fila = 2;

$sql1 = "SELECT * FROM formulario_contacto1 ORDER BY id DESC";
$consulta1 = mysqli_query($conexion,$sql1);
while($row1 = mysqli_fetch_array($consulta1)) {
	$nombre = $row1['nombre'];
	$correo = $row1['correo'];
	$telefono = $row1['telefono'];
	$edad = $row1['edad'];
	$mensaje = $row1['mensaje'];
	$estatus = $row1['estatus'];
	$fecha_creacion = $row1['fecha_creacion'];

	if($estatus==1){
		$estatus = 'Proceso';
	}else if($estatus>=2){
		$estatus = 'Listo';
	}

	$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(60);
	$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(60);
	$spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(20);

	$sheet->setCellValue('A'.$fila, $nombre);
	$sheet->setCellValue('B'.$fila, $correo);
	$sheet->setCellValue('C'.$fila, $telefono);
	$sheet->setCellValue('D'.$fila, $edad);
	$sheet->setCellValue('E'.$fila, $mensaje);
	$sheet->setCellValue('F'.$fila, $estatus);
	$sheet->setCellValue('G'.$fila, $fecha_creacion);

	$fila = $fila+1;
}

$fecha_inicio1 = date('Y-m-d');
$writer = new Xlsx($spreadsheet);
$writer->save('../resources/consultas1 '.$fecha_inicio1.'.xlsx');
header("Location: ../resources/consultas1 ".$fecha_inicio1.".xlsx");

?>