<?php
    $term = 10;
    $num1 = 0;
    $num2 = 1;
    $count = 0;

    while($count<$term){
        echo $num1 . "</br>";

        $num3 = $num1 + $num2;

        $num1 = $num2;
        $num2 = $num3;

        $count ++;
    }
?>