<?php

// example of encapsulation

class Student {
    public $name;

    // constructor ey
    public function __construct($name) {
        $this->name = $name;
    }

    public function greet() {
        return "Hello there I am " . $this->name; 
    }

}
        
$myStudent = new Student("Nblancs");
echo $myStudent->greet();

echo "</br>";
echo "</br>";

// example of inheritance

class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Teacher extends Person {
    public $subject;

    public function __construct($name, $subject) {
        parent::__construct($name);
        $this->subject = $subject;
    }

    public function intro() {
        return $this->getName() . " teaches " . $this->subject;
    }
}

$myTeacher = new Teacher("Nblancs", "PHP");
echo $myTeacher->intro();

echo "</br>";
echo "</br>";

// example of polymorphism

class Animal {
    public function speak() {
        return "Some sound";
    }
}

class Dog extends Animal {
    public function speak() {
        return "Woof";
    }
}

class Cat extends Animal {
    public function speak() {
        return "Meow";
    }
}

$animals = [new Dog(), new Cat()];

foreach ($animals as $animal) {
    echo $animal->speak() . "</br>";
}

echo "</br>";

// example of abstraction

abstract class PaymentMethod {
    abstract public function pay($amount);
}

class GCash extends PaymentMethod {
    public function pay($amount) {
        return "Paid " . $amount . " using GCash";
    }
}

class PayPal extends PaymentMethod {
    public function pay($amount) {
        return "Paid " . $amount . " using PayPal";
    }
}

$payment = new GCash();
echo $payment->pay(500);