<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    // print_r($_POST);
// $phnumber=$_POST['phnumber'];
// echo $phnumber;
// $faculty=$_POST['faculty'];
// echo $faculty;
// $gender=$_POST['gender'];
// echo $gender;
// $hobbies=$_POST['hobbies'];
// echo $hobbies;
// print_r($hobbies);
// $file= $_POST['filetoupload'];
// echo $file;
$filename=$_FILES['filetoupload']['name'];
$filesize=$_FILES['filetoupload']['size'];
$destinationdir="uploads/";
$filedestination=$destinationdir.basename($filename);
$filesource=$_FILES['filetoupload']['tmp_name'];
$allowedsize=1*1024*1024; //1MB

if($filesize>$allowedsize){
    echo " Error to upload ,Maximum file size allowed is 2KB";
}
else{


if(move_uploaded_file($filesource,$filedestination)){
    echo "File uploaded sucessfully";
}
else{
    echo "File upload failed";
}

}
}
else{
    echo "THe request method is other than post";
}
?>