<?php

class Car
{
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getName()
    {
        return $this->name;
    }


    public function card()
    {
        echo "Nome: {$this->name}, Ano: {$this->age}";
    }
}

$app = new Car("Honda", 2004);
$app->getName();
$app->getAge();
$app->card();