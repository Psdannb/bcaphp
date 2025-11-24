<?php
// $filename="delete.txt";
// unlink($filename);

//delete the folder
$foldername="../preetySoul/";
$files= scandir($foldername);
// print_r($files);
// die();
foreach($files as $file){
     if($file=="." || $file==".."){
        continue;
     }
    $pathtodelete=$foldername.$file;
   
    unlink($pathtodelete);
}
rmdir($foldername);
?>