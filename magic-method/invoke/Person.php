<?php

namespace Workshop;

class Person
{
    public function __invoke($name)
    {
        echo "hellp {$name}";
    }
}
