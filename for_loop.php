<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
    <fieldset style="width: 20rem;">
        <legend>Enter Number:</legend>
        <form method="post">
            <input type="number" name="number"><br><br>
            <input type="submit" name="submit">
        </form>
        <hr>
        <?php
            if(isset($_POST['submit'])){
                $a = $_POST['number'];
                for($i = 1;$i<=10;$i++){
                    echo "$a x $i =".$a*$i."<br>";
                }
            }
        ?>
    </fieldset>
</body>
</html>