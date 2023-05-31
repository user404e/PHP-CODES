<?php
    $name = $_POST["name"];
    $enrno = $_POST["enrno"];
    $address = $_POST["address"];
    $mobilenumber = $_POST["mobilenumber"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $department = $_POST["department"];
    $sem = $_POST["sem"];

    $conn = mysqli_connect("localhost","root","","demo");

    if($conn){
        $sql = "INSERT INTO studentdata VALUES('".$name."','".$enrno."','".$address."','".$gender."','".$department."','".$sem."','".$email."','".$mobilenumber."');";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "VALUES INSERTED ";
        }
        else{
            echo "SOMETHING WENT WRONG";
        }
    }
    else{
        echo "CANNOT CONNECT TO DATABASE";
    }
?>