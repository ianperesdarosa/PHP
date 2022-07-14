<?php

// string

$txt1 = "Hello, World!";
$txt2 = "Olá, Mundo!";

echo $txt1 . "<br>";
echo $txt2 . "<br>";

echo "<hr>";

//integer 

$x = 6998;

var_dump($x);
echo "<br>";

echo "<hr>";

//float 

$f = 10.5;

var_dump($f);
echo "<br>";

echo "<hr>";

//Boolean

$aprovado = true;
$reprovado = false;

var_dump($aprovado);
echo "<br>";

echo "<hr>";

//array

$cars = array("Volvo", "BMW", "Toyota");

var_dump($cars);

//Object

class car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is " . $this->color . " and it's model is " . $this->model;
    }
}

$mycar new car("Black", "BMW I3");
echo $mycar->message();
echo "<br>";
$mycar new car("White", "Volvo XC90");
echo $mycar->message();

//Null

$n = "Hello, World!";
$n = null;
var_dump($n);