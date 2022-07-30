<?php 
    echo "<h1>Ternary Operator</h1>";
   
    $age = 27;

    echo ($age>=18)? "Adult":"Teenage";

    echo "<br>";

    $x = 8;

    echo $y = ($x < 10) ? 9:100;

    echo "<br>";

    echo $z = isset($y) ? 'Y is set':'Y is not set';
?>