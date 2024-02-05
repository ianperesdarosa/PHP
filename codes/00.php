<?php

class Person {
    public $name;
    public $age;


    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function get_name() {
        return $this->name;
    }

    function get_age() {
        return $this->age;
    }

}

$logs = new Person("Ian", 19);
echo $logs->get_name();
echo $logs->get_age();
