<?php
    $count=0;
    $num=10;
    for($i=2;$i<$num;$i++){
        if($num%$i==0){
            $count++;
            break;
        }
    }
    if($count==0){
        Echo ($num." is a prime.");
    }
    else{
        ECHO ($num." is not a prime.");
    }
?>