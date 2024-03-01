<?php
// #17 arrays


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