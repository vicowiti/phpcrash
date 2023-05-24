



<!-- Instantiate a user objecr -->
<?php

/* === OOP === */

/*
From php 5 onwords you can write php in either a procedural or object oriented way.
OOP consists of classes that can hold properties and methods. Objects are then instantiated from classes.
*/

class User {
    // Properties are attributes that belong to a class
    // access modifiers: public, private, protected
    // public attribues can be accessed anywhere
    // private attributes can only be accessed inside the class
    // protected can only be accesses from inside the class and by inheriting classes.
    public $name;
    public $email;
    public $password;

    //  A method is a function that belongs to a class

    // a constructor method runs when an object is created

    public function __construct($name,$email, $password){
        // Initialize on creation
        $this->name = $name;
        $this->email = $email;
        $this->password  = $password;
    }
    

    // a setter method

    function set_name($name){
        $this->name = $name;
    }

    // a getter

    function get_name(){
        return $this->name;
    }
}

$user1 =  new User("Raphael", "rokmediastudio@yahoo.com", "12345");

// $user1->set_name("Victor");

var_dump($user1);
// echo $user1->get_name();

//==> Inheritance

class Employee extends User{

    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email,$password);
        $this->title = $title;
    }

    public function get_title(){
        return $this->title;
    }
}

$employee1 = new Employee("Victor", "vioeiti12@gmail.com", 1234, "Software developer");

echo $employee1->get_title();