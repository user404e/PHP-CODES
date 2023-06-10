<?php
    $n = $_POST['n'];

    $arr = [234,23,35,435,4,5324,35,135];

    rsort($arr);

    echo $arr[$n-1];
?>