<?php


if(!empty($_FILES['images'])){
    // File upload configuration
    $targetDir = "img/test/";
    $allowTypes = array('jpg','png','jpeg','gif');
    
    $images_arr = array();
    foreach($_FILES['images']['name'] as $key=>$val){
        $image_name = $_FILES['images']['name'][$key];
        $tmp_name   = $_FILES['images']['tmp_name'][$key];
        $size       = $_FILES['images']['size'][$key];
        $type       = $_FILES['images']['type'][$key];
        $error      = $_FILES['images']['error'][$key];
        
        $fileName = basename($_FILES['images']['name'][$key]);
        $targetFilePath = $targetDir . $fileName;
        
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)){
            if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$targetFilePath)){
                $images_arr[] = $targetFilePath;
            }
        }
    }
}


exit;



 $output = '';
 if(is_array($_FILES)){
      foreach($_FILES['images']['name'] as $name => $value){
           $file_name = explode(".", $_FILES['images']['name'][$name]);
           $allowed_extension = array("jpg", "jpeg", "png", "gif");
           if(in_array($file_name[1], $allowed_extension)){
                echo "hola2";
                $new_name = rand().'.'.$file_name[1];
                echo $sourcePath = $_FILES["images"]["tmp_name"][$name];
                $targetPath = "img/test/".$new_name;
                move_uploaded_file($sourcePath, $targetPath);
           }
      }
      /*
      $images = glob("img/test/*.*");
      foreach($images as $image){
        $output .= '
          <div class="col-md-2" align="center">
            <img src="'.$image.'" width="180px" height="180px" style="border:1px solid #ccc;margin-top:10px;" />
          </div>
        ';
      }
      echo $output;
      */
 }
 ?>