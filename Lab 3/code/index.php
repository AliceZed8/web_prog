<?php

// Task 1 RegExp

#1 screenshot https://ibb.co/64B2vcc
$str = "ahb acb aeb aeeb adcb axeb";
$regexp = "/a[a-z]{2}b/";
$matches= [];

preg_match_all($regexp,$str,$matches);

echo "Input string: $str\n";
echo "Matches:\n";
var_dump($matches);


#2 screenshot https://ibb.co/HpXLQfm
$input_str = "a1b2c3d4e7f93";
$regexp = "/[1-9][0-9]+|[0-9]/";

$result = preg_replace_callback(
    $regexp, //pattern 
    function ($matches) //callback
    {
        return pow($matches[0],3);
    }, 
    $input_str //input
);

echo "Input string: $input_str\n";
echo "Matches: $result\n";
