<?php
// #14 math functions

$a = 10;
$b = 3;
$c = $a % $b;
echo "a = $a\n";
echo "b = $b\n";
echo "a % b = $c \n";

echo "a / b ?\n";
if ($c == 0) {
    echo "Делится. Результат: ". $a / $b . "\n";
} else {
    echo "Делится c остатком. Остаток: $c\n\n";
}

$st = pow(2, 10);
$sq = sqrt(245);
$arr = [4, 2, 5, 19, 13, 0 ,10];
print_r( $arr );

$sum = 0;
foreach( $arr as $k => $v) {
    $sum += $v**2;
}
echo "Корень из суммы квадратов элементов массива " . sqrt($sum) . "\n\n";

$sq = sqrt(379);
echo "Корень из 379 = $sq\n";
echo "Округление до целых: ". round($sq) . "\n";
echo "Округление до десятых: ". round($sq, 1) . "\n";
echo "Округление до сотых: ". round($sq, 2) . "\n\n";

$sq = sqrt(587);
echo "Корень из 587 = $sq\n";
$arr = [
    "floor" => floor($sq),
    "ceil" => ceil($sq)
];
print_r( $arr );

echo "\nМассив \n";
$arr = [4, -2, 5, 19, -130, 0, 10];
print_r( $arr );

echo "Минимальное число: ". min($arr) ."\n";
echo "Максимальное число: ". max($arr) . "\n\n";

echo "Случайное число от 1 до 100: ". rand(1, 100) . "\n";
echo "Массив из 10 случайных чисел: \n";
$arr = [];
for ( $i = 0; $i < 10; $i++ ) {
    $arr[] = rand(1, 1000);
}
print_r( $arr );



echo "\nПусть a, b случаные числа\n";
echo " a | b  | abs(a-b) \n";
for ( $i = 0; $i < 8; $i++ ) {
    $a = rand(10,99);
    $b = rand(10,99);
    echo "$a | $b | ".abs($a-$b)."\n";
}
echo "\n";

echo "Пусть дан массив: \n";
$arr = [1 ,2, -1, -2, 3, -3];
print_r( $arr );
echo "Массив из тех же элементов но положительных: \n";
foreach ( $arr as $k => $v ) {
    $arr[$k] = abs($v);
}
print_r( $arr );

$num = 30;
echo "\nПусть дано число 30\n";
echo "Массив из его делителей:\n";
$arr = [];

for ( $i = 1; $i <= $num; $i++ ) {
    if ($num % $i == 0) {
        $arr[] = $i;
    }
    
}
print_r( $arr );
echo"\n";

echo "Пусть дан массив: \n";
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$k = 0;
foreach ( $arr as $k => $v ) {
    $sum += $v;
    $k++;
    if ($sum > 10) break;
}
if ($sum <= 10) {
    echo "Сумма больше 10 недостижима\n";
} else {
    echo "Нужно сложить $k элементов чтобы получить сумму больше 10\n\n";
}
