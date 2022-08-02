<?php
    function factorial($val){
        if($val <= 0){
            return 1;
        }else{
            return ($val * factorial($val-1));
        }
    }

    $x = 10;
    $fact = factorial($x);
    echo "Factorial of ".$x." is ".$fact;
?>