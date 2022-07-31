<?php
    echo "<h3>1 what is $globals example in php </h3>";
    $x = 75;
    $y = 25;
     
    function addition() {
      $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
     
    addition();
    echo $z;
?>