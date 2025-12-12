<?php
// A constructor runs automatically when object is created.
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