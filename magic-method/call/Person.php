<?php

namespace Workshop;

class Person
{
    public function __call($name, $args)
    {
        return [$name, $args];
    }
}
