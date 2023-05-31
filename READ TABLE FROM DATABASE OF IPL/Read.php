<?php
    $conn = mysqli_connect("localhost","root","");

    if($conn){
        echo "Connection Created Successfully";
    }
    else{
        echo "Connection Cant Be Created !";
    }
?>