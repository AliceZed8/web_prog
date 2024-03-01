<?php
// #16 functions

function increaseEnthusiasm(string $str) : string {
    $str .= "!";
    return $str;
}

echo increaseEnthusiasm("Hello")."\n";

function repeatThreeTimes(string $str) : string {

    return str_repeat($str, 3);
}

echo repeatThreeTimes("Meow")."\n";

echo increaseEnthusiasm(repeatThreeTimes("Woof"))."\n";

function cut(string $str, int $m, int $n = 10): string {
    return substr($str, 0 , $m);
}

$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1, 100);
}

function print_arr(Array $arr, int $start_index) {
    if ($start_index > count($arr) - 1) return;

    echo $arr[$start_index]. " ";
    print_arr($arr, ++$start_index);
}

echo "Массив: ";
print_arr($arr, 0);
echo "\n\n";

#Дано число
$num = 465;

function isSumLess(int $num): int {
    $sum = 0;
    $arr = str_split((string) $num);
    foreach($arr as $k => $v) {
        $sum += (int) $v;
    }

    if ($sum > 9) return isSumLess($sum);
    else return $sum;
}