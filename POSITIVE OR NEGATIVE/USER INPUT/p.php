<?php

$x = $_GET['x'];

if($x > 0){
        echo "POSITIVE";
}
elseif($x == 0){
    echo "ZERO";
}
  else{
    echo "NEGATIVE";
}

?>