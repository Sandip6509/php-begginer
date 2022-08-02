<?php
    // Simple function
    
    function welcome(){
        echo "This is my function";
    }

    welcome();

    // Parameterized Function

    function addition($val1,$val2){
        $add = $val1 + $val2;
        return $add;
    }

    $x = 52;
    $y = 65;
    echo "<hr>";
    echo "<h1>Addition is: ".addition($x,$y)."</h1>";
    echo "<hr>";

    function default_param($val1 = 0, $val2 = 0){
        $add = $val1 + $val2;
        return $add;
    }

    echo "<h1>Addition is: ".default_param($y)."</h1>";
    echo "<hr>";

    function name($name = 'Core PHP'){
        return $name;
    }
    echo name();
?>