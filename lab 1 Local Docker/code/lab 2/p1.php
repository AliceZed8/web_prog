<?php
// #1 Access by link

$very_bad_unclear_name = "15 chicken wings";

// Объявляем $order как ссылку
$order = &$very_bad_unclear_name;

$order .= " some text";
echo "Your order is: $very_bad_unclear_name.\n\n";