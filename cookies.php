<?php
    echo "<h1>Cookies</h1>";
    setcookie("core_php","Sandy",time()+1*24*60*60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <fieldset style="width:20rem;">
        <legend>Cookie Values</legend>
        <?php
            echo "<h3> PHP is: ".$_COOKIE['core_php']."</h3>";
        ?>
    </fieldset>
</body>
</html>