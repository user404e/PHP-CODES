
<?php
    $num = $_POST['num']; 
    $num2 = $num;
    $revnum = 0;  

    while ($num > 1)  
    {  
        $rem = $num % 10;  
        $revnum = ($revnum * 10) + $rem;  
        $num = ($num / 10);   
    }  

    if($num2 == $revnum){
        echo "PALINDROME";
    }
    else{
        echo "NOT PALINDROME";
    }
?>