<?php

namespace Workshop;

trait CanRun
{
    private $speed;

    public function run($speed)
    {
        $this->speed = $speed;
    }

    public function getSpeed()
    {
        return $this->speed;
    }
}
