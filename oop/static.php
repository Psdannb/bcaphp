<?php
// Static members are properties and methods of a class that belong to the class itself, 
// not to any specific object.
//They can be accessed without creating an object.

class Counter {
    public static $count = 0;

    public static function increment() {
        self::$count++;
    }
}

Counter::increment();
Counter::increment();

echo Counter::$count;
?>