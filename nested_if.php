<?php
    $a =90;
    $b =10;
    $c =50;

    if($a < $b){
        if($a < $c){
            echo "<h3>$a is less then $b and $c.</h3>";
        }
    }else if($b < $c){
        echo "<h3>$b is less then $a and $c.</h3>";
    }else{
        echo "<h3>$c is less then $a and $b.</h3>";
    }
?>