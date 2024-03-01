<?php
// #15 functions

function printStringReturnNumber() : int {
    echo "Hello, World!\n";

    return 1;
}

$my_num = printStringReturnNumber();

echo $my_num."\n\n";