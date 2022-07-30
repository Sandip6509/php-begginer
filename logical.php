<?php
    echo "<h1>Logical Operators</h1>";
    
    $a = true;
    $b = false;
    $c = true;
    $d = false;

    echo "And Operator:- <br>";
    var_dump($a and $b);
    echo "<br>";
    var_dump($a and $c);
    echo "<br> && Operator:- <br>";
    var_dump($a && $b);
    echo "<br>";
    var_dump($a && $c);
    echo "<br> OR Operator:- <br>";
    var_dump($a or $b);
    echo "<br>";
    var_dump($a or $c);
    echo "<br>";
    var_dump($b or $d);
    echo "<br> || Operator:- <br>";
    var_dump($a || $b);
    echo "<br>";
    var_dump($a || $c);
    echo "<br>";
    var_dump($b || $d);
    echo "<br> !(NOT) Operator:- <br>";
    var_dump(!$a);
    echo "<br>";
    var_dump(!$b);
    echo "<br>";
    var_dump(!$c);
?>