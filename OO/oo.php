<?php

include 'classes/Person.php';

$person = new Person('Jay', 'Kravetz');

$person->setDateOfBirth(new DateTime('1989-10-09'));

echo 'Hello, my name is ' . $person->getName() . ' and i am ' . $person->getAge() . ' old';

