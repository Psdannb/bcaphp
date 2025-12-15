<?php
class Person {
    public $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function showName() {
        echo "Name: " . $this->name;
    }
}

class Student extends Person {
    public $faculty;

    public function setFaculty($faculty) {
        $this->faculty = $faculty;
    }

    public function showFaculty() {
        echo "<br>Faculty: " . $this->faculty;
    }
}

$std = new Student();
$std->setName("Ram");        // inherited method
$std->setFaculty("BCA");

$std->showName();            // inherited method
$std->showFaculty();
?>