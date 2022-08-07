<?php
    session_start();

    echo session_save_path();
    echo "<br>";
    echo session_name();
    echo "<br>";
    $_SESSION['pro'] = "Core PHP";
    $_SESSION['level'] = "Begginer";
    $_SESSION['user_id'] = 10;
    echo "My First Programming car is ".$_SESSION['pro']."<br>";
    echo "My level is ".$_SESSION['level']."<br>";
    echo "My user id is ".$_SESSION['user_id']."<br>";
    unset($_SESSION['user_id']);
    echo "My user id is ".$_SESSION['user_id']."<br>";
    session_destroy();
    $_SESSION = [];
    echo "<pre>";
    print_r($_SESSION);
?>