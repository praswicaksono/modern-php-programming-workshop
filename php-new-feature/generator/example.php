<?php

function filter1($input)
{
    foreach ($input as $value) {
        if ($value % 2 !== 0) {
            yield $value;
        }
    }
}

function filter2($input)
{
    foreach ($input as $value) {
        if ($value > 5) {
            yield $value;
        }
    }
}

foreach (filter2(filter1([1,2,3,4,5,6,7,8,9,10])) as $value) {
    echo $value;
}
