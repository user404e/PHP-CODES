<?php
    $conn = mysqli_connect("localhost","root","","test");

    if($conn){
        $sql = "DELETE FROM mytable WHERE srno = 1;";
        $r = mysqli_query($conn,$sql);
        if($r){
            echo "value insert";
        }
        else{
            echo "cannot";
        }
    }
    else{
        echo "Cannot Connect";
    }
?>