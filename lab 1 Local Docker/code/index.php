<?php
// #1 Access by link
printf("#1 Access by link\n");

$very_bad_unclear_name = "15 chicken wings";

// Объявляем $order как ссылку
$order = &$very_bad_unclear_name;

$order .= " some text";
echo "Your order is: $very_bad_unclear_name.\n\n";

//#######################################################

// #2 Numbers
printf("#2 Numbers\n");

$i = 0;
echo $i;
echo "\n";

$j = 1;
echo $j;
echo "\n";

$double = 3.1415926535;
echo $double;
echo "\n";

echo 3 << 2; // Бит сдвиг
echo "\n";

$last_month = 1187.23;
$this_month = 1089.98;

echo "Diff ". $last_month - $this_month."\n\n";

//#######################################################

// #11 multiplication and division
printf("#11 multiplication and division\n");

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language."\n\n";

//#######################################################

// #12 pow
printf("#12 pow\n");

echo "8^2 = ". 8**2 . "\n\n";

//#######################################################