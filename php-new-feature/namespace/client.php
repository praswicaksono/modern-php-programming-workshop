<?php

// load files
require 'Attendee.php';
require 'Presenter.php';

// use keyword to avoid name collision
use Workshop\Attendee\Person as Attendee;
use Workshop\Presenter\Person as Presenter;

// create attendee and presenter object
$attendee = new Attendee('bejo');
$presenter = new Presenter('joni');

// get attendee class
echo get_class($attendee) . PHP_EOL;

// get presenter class
echo get_class($presenter) . PHP_EOL;

var_dump($attendee);

var_dump($presenter);
