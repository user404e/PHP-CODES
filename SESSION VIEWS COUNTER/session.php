<?php
    session_start();

    if(isset($_SESSION['views'])){
        $_SESSION['views'] += 1;
    }
    else{
        $_SESSION['views'] = 1;
    }

    echo "VIEWS COUNTER " . $_SESSION['views'];
?>