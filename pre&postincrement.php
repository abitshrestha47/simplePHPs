<?php
    $var=1;
    $var1=1;
    //$var++==uses the value before in operations then increase the value.
    //++$var++==increments the value then uses it in the operation.
    echo ($var++."<br>");
    echo (++$var1."<br>");
    function increment($n){
        echo ($n."<br>");
    }
    $a=1;
    $a1=1;
    $num=++$a;//increments then uses 
    $n1=$a1++;//uses in operation first
    increment($num);
    increment($n1);
    echo ($a1."<br>");//after assigned increased value
    echo($a);

    $i=1;
    $i=$i++;
    //i=1;i=i+1;i=1//OUTPUT 1;
    echo ("<br>".$i);
?>