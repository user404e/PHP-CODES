<?php
    $conn = mysqli_connect("localhost","root","");

    if($conn){
        echo "Connected Successfully";
    }
    else{
        echo "Connection Cant Be Created !";
    }
?>