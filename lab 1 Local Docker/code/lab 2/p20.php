<?php
// #20 functions comb
#1
$arr = [1, 2, 3, 5, 1, 13, 5,6, 9];
$c = array_sum($arr) / count($arr);

#2
$res = array_sum(range(1, 100));

#3

$new_arr = array_map("sqrt", $arr);

#4
#Комибинируем массивы
$arr = array_combine(range('a', 'z'), range(1, 26));

#5

$str = "1234567890";
$arr = str_split($str, 2);
$res = array_sum($arr);
echo $res."\n";