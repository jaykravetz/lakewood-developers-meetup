<?php

// include 'classes/Person.php';
/*
spl_autoload_register(function($class) {
    include  __DIR__ . '\classes\\' . $class . '.php';
});
*/
include 'vendor/autoload.php';

$person = new Person('Jay', 'Kravetz');

$person->setDateOfBirth(new DateTime('1989-10-09'));

echo 'Hello, my name is ' . $person->getName() . ' and i am ' . $person->getAge() . ' old';

