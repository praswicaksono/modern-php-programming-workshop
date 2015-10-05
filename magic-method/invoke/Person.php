<?php

namespace Workshop;

class Person
{
    public function __invoke($name, $nama2)
    {
        echo "hello {$name}";
    }
}
