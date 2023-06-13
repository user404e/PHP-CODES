<?php
    $conn = mysqli_connect("localhost","root","","test");

    if($conn){
        $sql1 = "create table demo2 (srno int(5));";
        $result1 = mysqli_query($conn,$sql1);

        $sql2 = "insert into demo2 values(1),(2);";
        $result2 = mysqli_query($conn,$sql2);

        if($result1){
            echo "Table Created Sucessfully";
        }
        else{
            echo "Table Cannot Be Created";
        }
        if ($result2) {
            echo "Value Inserted Successflly";
        } else {
            echo "Value Cannot Be Created";
        }    
    }
?>