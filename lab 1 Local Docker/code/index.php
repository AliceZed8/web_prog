<?php
// #1
/* Imagine a lot of code here */ 
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;

$order .= " some text";
  
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

// OUT: "Your order is: 15 chicken wings some text."
