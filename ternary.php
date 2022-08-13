<?php
    // $r=40;
    // echo ($r>=35)? "passed":"failed";
    function ternary($n){
        $result=$n>10 && $n<21?"greater than 10":($n>20 && $n<31?"greater than 20":($n<40?"greater than 30":"greater than 40"));
        echo $result;
        echo ("<br>");
    }
    ternary(11);
    ternary(21);
    ternary(31);
    ternary(40);
?>