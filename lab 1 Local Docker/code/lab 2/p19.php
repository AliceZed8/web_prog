<?php
// #19 loops


for ($i = 0; $i < 20; $i++) {
    #echo str_repeat("x", $i + 1)."\n"; так короче было бы)
    for ($j = 0; $j < $i + 1; $j++) {
        echo "x";
    }
    echo "\n";
    
}
echo "\n";