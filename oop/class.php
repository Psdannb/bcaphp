<?php 
// A class is a blueprint or template.It defines properties (variables) and methods (functions)
class introduction{
    //properties
    public $name;
    public $subject;
    // methods 
 public function greet(){
    echo "Hello guys, I am $this->name and i will be teaching $this->subject";
 }
}
// An object is created from a class. It represents a real example of that class.
$obj=new introduction();
$obj->name="Dan Bahadur Adhikari";
$obj->subject="Web Technology";
$obj->greet();

$obj2= new introduction();
$obj2->name="Jiwan Dhamala";
$obj2->subject="Account";
// $obj2->greet();





?>