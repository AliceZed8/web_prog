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

// #13 assignment operators
printf("#13 assignment operators\n");

$my_num = 0;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;

echo '$answer = '. $answer . "\n\n";

//#######################################################

// #14 math functions
printf("#14 math functions\n");

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

//###########################################################################

// #15 functions
printf("#15  functions\n");

function printStringReturnNumber() : int {
    echo "Hello, World!\n";

    return 1;
}

$my_num = printStringReturnNumber();

echo $my_num."\n\n";

//###########################################################

// #16 functions
printf("#16  functions\n");

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


//###########################################################

// #17 arrays
printf("#17  arrays\n");


#1
function create_array(int $l): Array {
    $arr = [];
    for ($i = 1; $i <= $l; $i++) {
        $arr[] = str_repeat("x", $i);
    }
    return $arr;
}

print_r(create_array(5));

#2
function arrayFill(string $value, int $count): Array {
    #return array_fill(0, $count, $value);
    for ( $i = 0; $i < $count; $i++) {
        $arr[] = $value;
    }

    return $arr;
}

#3
$arr = [[1, 2, 3], [4, 5], [6]];
$sum = 0;

foreach($arr as $k => $v) {
    foreach($v as $k2 => $v2) {
        $sum += $v2;
    }
}

#4
$arr = [];
for ($i = 0; $i < 3; $i++) {
    $arr[] = [];
    for ($j = 0; $j < 3; $j ++) {
        $arr[$i][] = $i * 3 + 1 + $j;
    }
}

#5
$arr = [2, 5, 3, 9];

$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result."\n";

#6
$user = [
    "name" => "Иван",
    "surname" => "Иванов",
    "patronymic" => "Иванович"
];

echo $user['surname']." ".$user["name"]." ".$user['patronymic']."\n";

#7
$date = [
    "year" => 2024,
    "month" => 3,
    "day" => 1
];

echo $date["year"]."-".$date["month"]."-".$date['day']."\n";

#8

$arr = ['a', 'b', 'c', 'd', 'e'];

echo count($arr)."\n";
#echo sizeof($arr)."\n";

#9
$l = count($arr);
echo $arr[$l - 1]." ".$arr[$l - 2]."\n";

//###########################################################