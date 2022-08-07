<?php
    echo "<pre>";
    print_r(DateTimeZone::listIdentifiers());
    echo "<hr>";
    echo "Current timezone is: ".date_default_timezone_get();
    date_default_timezone_set('Asia/Kolkata');
    echo "<br>";
    echo "Current timezone is: ".date_default_timezone_get();
    echo "<hr>";
    echo "<h2>mktime</h2>";
    echo mktime(12,30,20,26,03,2022);
    echo "<h2>date</h2>";
    echo date('Y-m-d',mktime(12,30,20,26,03,2022));
    echo "<hr>";
    echo "<h2>Time Functions</h2>";
    echo 'Current Parameter is "r": '.date('r')."<br>"; 
    echo 'Current Parameter is "a": '.date('a')."<br>"; 
    echo 'Current Parameter is "A": '.date('A')."<br>"; 
    echo 'Current Parameter is "g": '.date('g')."<br>"; 
    echo 'Current Parameter is "G": '.date('G')."<br>"; 
    echo 'Current Parameter is "h": '.date('h')."<br>"; 
    echo 'Current Parameter is "H": '.date('H')."<br>"; 
    echo 'Current Parameter is "i": '.date('i')."<br>"; 
    echo 'Current Parameter is "s": '.date('s')."<br>";
    echo "<hr>";
    echo "<h2>Day Parameters</h2>";
    echo 'Current Parameter is "d": '.date('d')."<br>";
    echo 'Current Parameter is "j": '.date('j')."<br>";
    echo 'Current Parameter is "D": '.date('D')."<br>";
    echo 'Current Parameter is "l": '.date('l')."<br>";
    echo 'Current Parameter is "w": '.date('w')."<br>";
    echo 'Current Parameter is "z": '.date('z')."<br>";
    echo "<hr>";
    echo "<h2>Month Parameters</h2>";
    echo 'Current Parameter is "m": '.date('m')."<br>";
    echo 'Current Parameter is "m": '.date('m')."<br>";
    echo 'Current Parameter is "M": '.date('M')."<br>";
    echo 'Current Parameter is "F": '.date('F')."<br>";
    echo 'Current Parameter is "t": '.date('t')."<br>";
    echo "<hr>";
    echo "<h2>Year Parameters</h2>";
    echo 'Current Parameter is "L": '.date('L')."<br>";
    echo 'Current Parameter is "Y": '.date('Y')."<br>";
    echo 'Current Parameter is "y": '.date('y')."<br>";
?>