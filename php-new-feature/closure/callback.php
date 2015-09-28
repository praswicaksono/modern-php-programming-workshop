<?php

// define array that contain number (1-0)
$array = [1,2,3,4,5,6,7,8,9,10];

// iterate array by using array_walk
array_walk($array, function ($value) {
   if ($value % 2 === 0) {
       echo $value . PHP_EOL;
   }
});
