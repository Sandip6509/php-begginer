<?php
    echo "<br>=============strtolower=============<br>";
    $str = "I Am CORE PHP";
    echo strtolower($str);
    echo "<br>=============strtoupper=============<br>";
    $str_lower = strtolower($str);
    echo strtoupper($str_lower);
    echo "<br>=============strlen=============<br>";
    $str_len = strtolower($str);
    echo strlen($str_len);
    echo "<br>=============explode=============<br>";
    echo "<pre>";
    print_r(explode(' ',$str));
    echo "<br>=============substr=============<br>";
    echo substr($str, 5, 10);
    echo "<br>=============str_replace=============<br>";
    echo str_replace('CORE','Advance',$str);
    echo "<br>=============strpos=============<br>";
    echo strpos($str,'CORE');
    echo "<br>=============sha1=============<br>";
    echo sha1($str);
    echo "<br>=============md5=============<br>";
    echo md5($str);
    echo "<br>=============str_word_count=============<br>";
    echo str_word_count($str);
    echo "<br>=============ucfirst=============<br>";
    echo ucfirst(strtolower($str));
    echo "<br>=============lcfirst=============<br>";
    echo lcfirst($str);
?>