<?php
    // Arthmetic Operators.
    echo "<h1>Arthmetic Operators</h1>";
    $a = 120;
    $b = 10;
    $addition = $a + $b;
    echo "Addition is: $addition<br>";
    $subtration = $a - $b;
    echo "Subtration is: $subtration<br>";
    $multiplication = $a * $b;
    echo "Multiplication is: $multiplication<br>";
    $division = $a / $b;
    echo "Division is: $division<br>";
    $modulus = $a % $b;
    echo "Modulus is: $modulus<br>";
    $exponential = $a ** $b;
    echo "Exponential is: $exponential<br>";

    // Assignment Operators
    echo "<h1>Assignment Operators</h1>";
    $x = $a;
    echo "Assign Operator: $x <br>";
    $a += $b; // $a = $a + $b;
    echo "Add then assign: $a <br>";
    $a -= $b; // $a = $a - $b;
    echo "Subtract then assign: $a <br>";
    $a *= $b; // $a = $a * $b;
    echo "Multiply then assign: $a <br>";
    $a /= $b; // $a = $a / $b;
    echo "Division then assign: $a <br>";
    $a %= $b; // $a = $a % $b;
    echo "Modulus then assign: $a <br>";
?>