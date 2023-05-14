<?php

    $s1 = $_POST['s1'];
    if($s1==strrev($s1)){
        echo "PALINDROME";
    }
    else{
        echo "NOT PALINDROME";
    }

?>