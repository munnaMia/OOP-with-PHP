<?php

abstract class Animal
{
    public $name;

    // A regular method (all animals eat the same way)
    public function eat()
    {
        return "{$this->name} is eating.";
    }

    // An abstract method (no body {} here! Just a semicolon ;)
    // This FORCES the child class to define this method.
    abstract public function makeSound();
}

// Child Class
class Dog extends Animal
{
    public function makeSound()
    {
        return "Woof! Woof!";
    }
}
