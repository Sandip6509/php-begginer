<?php
    echo "<h1>Swap Two Numbers in PHP</h1>";
    $num1 = 10;
    $num2 = 50;

    echo "Number 1 : $num1";
    echo "<br> Number 2 : $num2";

    $num3  = 0;
    $num3 = $num1;
    $num1 = $num2;
    $num2 = $num3;
    
    echo "<br> Number 1 : $num1";
    echo "<br> Number 2 : $num2";

    echo "<h1> Swapping Two Numbers without Temporary Variable </h1>";

    $num1 = 10;
    $num2 = 50;

    echo "Number 1 : $num1";
    echo "<br> Number 2 : $num2";

    $num1 = $num1 - $num2;
    $num2 = $num1 + $num2;
    $num1 = $num2 - $num1;

    echo "<br> Number 1 : $num1";
    echo "<br> Number 2 : $num2";
    echo "<br> Output <br>";
    var_dump(0123 == 123);
    echo "<br>";
    var_dump('0123' == 123);
    echo "<br>";
    var_dump(0123 === 123);
    echo "<br>";
    $x = true;
    var_dump($x);

    echo "<h1>write a php program to find the largest of three numbers using ternary operator</h1>";
    $a = 115;
    $b = 50;
    $c = 60;

    $largest = ($a > $b2) ? ($a > $b ? $a : $b):($b > $c ? $b: $c);

    echo "largest number:- $largest";

    echo "<h1>write a php program in which enter amount year rate by form and find the simple interest</h1>";

    $p = 100;
    $n = 2;
    $r = 22;
    $si =   ($p * $n * $r) / (100);
    echo ("Simple Interest is: $si");
