<?php
include('conexion.php');
require '../resources/Spreadsheet/autoload.php';
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
$fecha_creacion = date('Y-m-d');
$condicion = $_POST["condicion"];

if($condicion=='subir1'){
  $archivo_nombre = $_FILES['file']['name'];
  $archivo_temporal = $_FILES['file']['tmp_name'];

  $extension = explode(".", $archivo_nombre);
  $extension = $extension[count($extension)-1];

  $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($archivo_temporal);
  $worksheet = $spreadsheet->getActiveSheet();

  $limite = 9000;
  //$limite = 10;

  for($i=2;$i<=$limite;$i++){
      if($worksheet->getCell('A'.$i)!=''){ 
      $nombre = $worksheet->getCell('A'.$i);
      $correo = $worksheet->getCell('B'.$i);
      $telefono = $worksheet->getCell('C'.$i);
      $hablame = 0;
      $estatus = 1;
      $sql1 = "INSERT INTO wix (nombre,correo,telefono,hablame,estatus,fecha_creacion) VALUES ('$nombre','$correo','$telefono','$hablame','$estatus','$fecha_creacion')";
      $proceso1 = mysqli_query($conexion,$sql1);
      }
  }

  $datos = [
    "estatus" => "ok",
  ];
  echo json_encode($datos);

}

if($condicion=='subir2'){
  $archivo_nombre = $_FILES['file']['name'];
  $archivo_temporal = $_FILES['file']['tmp_name'];
  $sql1 = "TRUNCATE wix";
  $proceso1 = mysqli_query($conexion,$sql1);

  $extension = explode(".", $archivo_nombre);
  $extension = $extension[count($extension)-1];

  $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($archivo_temporal);
  $worksheet = $spreadsheet->getActiveSheet();

  $limite = 20000;

  for($i=2;$i<=$limite;$i++){
      if($worksheet->getCell('A'.$i)!=''){ 
      $nombre = $worksheet->getCell('A'.$i);
      $telefono = $worksheet->getCell('B'.$i);
      $hablame = 0;
      $estatus = 1;
      $sql2 = "INSERT INTO wix (nombre,correo,telefono,hablame,estatus,fecha_creacion) VALUES ('$nombre','$correo','$telefono','$hablame','$estatus','$fecha_creacion')";
      $proceso2 = mysqli_query($conexion,$sql2);
      }
  }

  $datos = [
    "estatus" => "ok",
  ];
  echo json_encode($datos);

}

?>