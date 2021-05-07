<?php
$direccion = $_GET["archivo"];
//$direccion = "img/img3.png";
$fileName = basename($direccion);
$filePath = "img/convertidos1/".$fileName;
if(!empty($fileName) && file_exists($filePath)){
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$fileName");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");
    readfile($filePath);
    exit;
}else{
    //echo 'The file does not exist.';
}
?>