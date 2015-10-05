<?php

require 'Person.php';

use Workshop\Person;

$person = new Person('bejo');

echo "hello {$person->getName()}";

