<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTTPS</title>
</head>

<body>
    <form method="POST">
        <fieldset style="width: 20rem;">
            <legend>Personal Details</legend>
            <label for="name">Name</label>
            <input type="text" name="name"><br><br>
            <label for="email">Email</label>
            <input type="email" name="email"><br><br>
            <label for="dob">DOB</label>
            <input type="date" name="dob"><br><br>
            <input type="submit" name="submit">
        </fieldset>
    </form>
    <div style="display:flex;">
        <fieldset style="width:20rem;">
            <legend>$_GET Data</legend>
            <?php
            echo "<h3>Name is: " . $_GET['name'] . "</h3>";
            echo "<h3>Email is: " . $_GET['email'] . "</h3>";
            echo "<h3>Date of Birth is: " . $_GET['dob'] . "</h3>";
            ?>
        </fieldset>
        <fieldset style="width:20rem;">
            <legend>$_POST POST</legend>
            <?php
            echo "<h3>Name is: " . $_POST['name'] . "</h3>";
            echo "<h3>Email is: " . $_POST['email'] . "</h3>";
            echo "<h3>Date of Birth is: " . $_POST['dob'] . "</h3>";
            ?>
        </fieldset>
        <fieldset style="width:20rem;">
            <legend>$_REQUEST POST</legend>
            <?php
            echo "<h3>Name is: " . $_REQUEST['name'] . "</h3>";
            echo "<h3>Email is: " . $_REQUEST['email'] . "</h3>";
            echo "<h3>Date of Birth is: " . $_REQUEST['dob'] . "</h3>";
            ?>
        </fieldset>
    </div>
</body>

</html>