<?php
// A destructor is a special function that is automatically executed when the object is destroyed or the script ends.
//  It is used to perform cleanup tasks such as closing files or database connections.
class Demo {
    public function __construct() {
        echo "Object created.<br>";
    }

    public function __destruct() {
        echo "Object destroyed.";
    }
}

$d = new Demo();

?>