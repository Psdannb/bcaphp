<?php
// A constructor is a special function inside a class that is automatically executed when an object is created. 
// It is used to initialize object properties or perform setup tasks.
class student {
    public $name;
    public $faculty;
    public $sem;

    public function __construct($objname,$objfaculty, $objsem){
        $this->name=$objname;
        $this->faculty=$objfaculty;
        $this->sem=$objsem;
    }
    public function details(){
        echo "$this->name reads in $this->faculty $this->sem Sem";
    }
}
$obj =new student("Hari","BCA","4th");
$obj->details();
?>