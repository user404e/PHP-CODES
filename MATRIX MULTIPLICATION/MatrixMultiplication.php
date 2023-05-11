<?php

    $m1 = array(
        array(1,1,1),
        array(2,2,2),
        array(3,3,3)
    );

    $m2 = array(
        array(1,1,1),
        array(2,2,2),
        array(3,3,3)
    );

    $m3 = array(
        array(0,0,0),
        array(0,0,0),
        array(0,0,0)
    );

    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            for($k=0;$k<3;$k++){
                $m3[$i][$j] += $m1[$i][$k] * $m2[$k][$j];
            }
        }
    }

    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            echo $m3[$i][$j] . " ";
        }
        echo "</br>";
    }
?>