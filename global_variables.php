<?php
    $firstName = 'Core';
    $lastName = 'PHP';
    echo "<pre>";
    function fullName()
    {
        $GLOBALS['fullName'] = $GLOBALS['firstName'].' '.$GLOBALS['lastName'];
    }

    fullName();
    echo $fullName;

    print_r($_SERVER);
?>