<?php
    $m1 = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
    );

    $m2 = array(
        array(9,8,7),
        array(6,5,4),
        array(3,2,1)
    );

    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            $m3[$i][$j] = $m1[$i][$j] + $m2[$i][$j];
            echo $m3[$i][$j] . " ";
        }
        echo "</br>";
    }
?>