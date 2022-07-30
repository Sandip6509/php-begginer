<?php
    echo "<h1>Comparision Operators</h1>";
    $x = 100;
    $y = 100;

    echo "Equal : ";
    var_dump($x == $y); // return true
    echo "<br> Not Equal (!=) : ";
    var_dump($x != $y); // return true
    echo "<br> Not Equal (<>) : ";
    var_dump($x <> $y); // return true
    echo "<br> Identical : ";
    var_dump($x === $y); // return false
    echo "<br> Not Identical : ";
    var_dump($x !== $y); // return true
    echo "<br> Greater Than : ";
    var_dump($x > $y); // return true
    echo "<br> Less Than : ";
    var_dump($x < $y); // return true
    echo "<br> Greater Than Or Equals : ";
    var_dump($x >= $y); // return true
    echo "<br> Less Than Or Equals: ";
    var_dump($x <= $y); // return true
    echo "<br> Spaceship operator: ";
    var_dump($x <=> $y); // return true
?>