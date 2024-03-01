<?php
// #18 if/else

#1
function f1(int $a, $b): bool {
    if ($a + $b > 10) return true;
    else return false;
}

#2
function f2(int $a, $b): bool {
    if ($a == $b) return true;
    else return false;
}

#3
$test = 0;
if (!$test) echo "верно\n";

#4
$age = 19;

if ($age < 10 || $age > 99)
    echo "Возраст меньше 10 или больше 99\n";
else {
    $sum = 0;
    $arr = str_split((string) $age);
    foreach ($arr as $k => $v) {
        $sum += (int)$v;
    }
    if ($sum <= 9) echo "Сумма цифр однозначна\n";
    else echo "Сумма цифр двузначна\n";
}

#5

$arr = [1 , 3, 4];

if (count($arr) == 3) {
    echo "Сумма элементов: ".array_sum($arr)."\n\n";
}