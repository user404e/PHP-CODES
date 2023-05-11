<?php
    $num = 11;
    $flag = 0;
    
    for($i=2; $i<$num ; $i++){
        if($num % $i == 0){
            $flag = 1;
            break;
        }
    }
    if($flag==1){
        echo "NOT PRIME";
    }
    else{
        echo "PRIME";
    }
    
?>