<?php 
// $varibalename=10;
// echo $varibalename;
// print_r($varibalename);
// var_dump($varibalename);
// ++,--
// (condition)?"True statment":false statment;

// $b=3;
//$b=$b+$a;
// $b%=$a;
// echo $b;
// if($a||$b){
//     echo "A is greater than b";
// }
// echo($a>$b)?"True condition":"False Condition";
// echo ($a|$b);
// 10=2
// 11=3
// 11=3

// $a=8;
// $c=$a>>2;
// echo $c;
// a=00000010
// a=00001000




//control structures.
// 1- conditional statements-if,if else, nested if else, switch
// 2-looping- for, while, do while .

// if, if else, nested if else 
// $a=2;
// if($a>2){
//     echo "The condition is true";
  
// }
// else{
//     echo "The condition is false";
//       if(){
        
//     }
// }
// if else if
// $a=10;
// if($a==1){
// echo "The value of A is 1";
// }
// else if($a==2){
// echo "The value of A is 2";

// }
// else if($a==3){
// echo "The value of A is 3";

// }
// else{
// echo "The value of A is other than 1,2,3";

// }
// $a="dan";
// switch($a){
// case "dan":{
//     echo "The value of A is 1";
//     break;
// }
// case 2:{
//     echo "The value of A is 2";
//     break;
// }
// case 3:{
//     echo "The value of A is 3";
//     break;
// }
// default:{
//     echo "The value of A is other than 1,2,3";
// }
// }
// for(initialization,condition,increment/decreme)
//     while(condtion){
// //body
//increment/decrement;
    // }


    // do{

    // }while(condition);

// array 
// $x= [1,2,3,4,5,6] ;
// $x[0];
// $x[1];
// ["name"=>"dan","faculty"=>"BCA"];
// $x[name];
// $x=[10,20,30,40,50];
// $arr=array(10,20,30,40,50);
// $arr.push(100);
// $arr[]=100;

// echo $x;
// print_r($arr);
// echo ($x[0]);
// foreach($arr as $elem){
//     echo $elem;
//     echo"<br/>";
// }

// $aarr=array("username"=>"Hello","password"=>"12345"); //associative array;
// $aarr['college']="nihareeka";
//"key"=>value;
// print_r($aarr);
// echo $aarr['username'];
// foreach($aarr as $elem){
//     echo $elem;
//     echo"<br/>";
// }



// $multi=array(1,2,
// ["a","b","C"],
// 4,5);


// print_r($multi);
// echo"<br/>";
// echo $multi[2][2][2];
// $multi=array(1,2,
// ["a","b","C"],
// 4,5);
// foreach($multi as $elem){
    
//    if(is_array($elem)){
//    foreach($elem as $child){
//         // print_r($child);
//         echo $child;
//         echo"<br/>";
//     }
//    }
//    else{
//     echo $elem;
//    }
//     echo"<br/>";
// }


// function function_name(para lists){
//     //body
// }
// function greet();
// function greet($name){
//     echo "Hello Guys welcome to my class I am" . $name;
//     echo "<br/>";
// }
// greet("Dan");
// greet("Ram");

 $x=0;
function add(){
     GLOBAL $x;
     $x++;
}
add();
add();
add();
add();
$message= "The function add is called " .$x." times";
echo $message;

?>