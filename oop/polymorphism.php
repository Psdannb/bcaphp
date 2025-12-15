<?php
//Polymorphism is an object-oriented programming concept,
//  where the same method name performs different actions depending on the object that calls it.
// The word polymorphism means many forms.
class Animal {
    public function sound() {
        echo "Animal makes a sound";
    }
}

class Dog extends Animal {
    public function sound() {
        echo "Dog barks";
    }
}

class Cat extends Animal {
    public function sound() {
        echo "Cat meows";
    }
}

$animals = [new Dog(), new Cat()];

foreach ($animals as $animal) {
    $animal->sound();
    echo "<br>";
}
//here we are overriding the method sound() in the child class.
?>