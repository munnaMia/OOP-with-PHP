<?php


// Parent Class (The "Base" class)
class Person
{
    // properties
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // public method
    public function showName()
    {
        echo $this->name . "\n";
    }
}

// Child Class (Inherits from Person) extend used to inheritance...
class Student extends Person
{
    public $stu_id;
    public $mark;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addMark($mark)
    {
        $this->mark = $mark;
    }

    // Overriding the parent's introduce method this is know as method overloading...
    public function showName()
    {
        echo 'Dear ' . $this->name . "\n";
    }

    public function showProfile()
    {
        echo $this->name . "\n" . $this->stu_id . "\n" . $this->mark;
    }
}
