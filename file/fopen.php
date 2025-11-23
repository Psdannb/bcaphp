<?php
// fopen(filepath,mode), mode=> r,w ,a
$filepointer = fopen("note.txt","r");// open the file in read mode
if($filepointer){
    // filesize(filename)=>returns the no of characters in the file including 
    // the spaces 
    $characterscount= filesize("note.txt");
 
    // fread(filepointer,size);
    
    // $content=fread($filepointer, $characterscount);
    // echo $content;
//  echo fgets($filepointer);
//   echo fgets($filepointer);
    // $firstline=fgets($filepointer);// returns the single line from the file.
    // echo $firstline;


    // echo fgetc($filepointer);
    // echo fgetc($filepointer);
    $firstchar=fgetc($filepointer);
    echo $firstchar;
}
fclose($filepointer);// close the path.

?>