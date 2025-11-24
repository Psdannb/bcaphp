<?php
// $fileptr=fopen("write.txt","w");
$fileptr=fopen("write.txt","a");
$content="I am Writing on the file from another file";
// fwrite(filepointer, content)
fwrite($fileptr,$content);
fclose($fileptr);
?>