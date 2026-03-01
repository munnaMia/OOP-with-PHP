<?php

// include 'Person.php'; one way

// // secound way 
// spl_autoload_register(function($className){
//     include $className . '.php';
// });

// third way
require_once 'Person.php';
require_once 'Animal.php';

// instance of Person class
$user = new Student('munna');
$user->stu_id = 234;
$user->addMark(2312);
$user->showName();


$dog = new Dog();
