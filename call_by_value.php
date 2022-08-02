<?php

function swap_value(&$a,&$b){
    $c = $a;
    $a = $b;
    $b = $c;
}
$x = 10;
$y = 20;

echo "<h1>";
echo "Before calling function value of X:- ".$x." and Y:- ".$y;
echo "<br>";
swap_value($x,$y);
echo "Before calling function value of X:- ".$x." and Y:- ".$y;
echo "</h1>";
?>