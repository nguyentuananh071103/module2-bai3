<?php

class Student
{
public $name;
private $age;

public function __construct($name,$age)
{
    $this->name = $name;
    $this->age = $age;
}

public function getAge();
{
    return $this->age;
}

public
}