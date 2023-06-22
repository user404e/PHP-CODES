<?php
    $conn = mysqli_connect("localhost","root","","test");

    if($conn){
        $sql = "UPDATE TABLE mytable set name = 'devendra' WHERE srno = 2;";
        $r = mysqli_query($conn,$sql);
        if($r){
            echo "Updated Successfully";
        }
        else{
            echo "cannot";
        }
    }
    else{
        echo "Cannot Connect";
    }
?>