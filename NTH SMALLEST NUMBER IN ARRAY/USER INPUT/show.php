<?php
    $n = $_POST['n'];

    $arr = array(234,221,0,53,43,5754,436,435,5635,345,20);

    sort($arr);

    echo $arr[$n-1];
?>