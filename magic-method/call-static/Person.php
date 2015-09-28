<?php

namespace Workshop;

class Person
{
    public static function __callStatic($name, $args)
    {
        return [$name, $args];
    }
}
