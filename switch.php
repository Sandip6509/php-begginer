<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>
</head>

<body>
    <fieldset style="width: 20rem;">
        <legend>Enter Your Marks</legend>
        <form method="post">
             <input type="number" name="marks"><br><br>
             <input type="submit" name="Submit"><hr>
        </form>
        <?php
            $marks = $_POST['marks'];
            switch ($marks) {
                case $marks < 35:
                    echo "<b style='color:red'>You're Failed!</b>";
                    break;
                case ($marks >= 35 && $marks <=40):
                    echo "<p style='color:green'>Congratulation!! You have succesfully cleared this exam with <b> D Grade</b></p>";
                    break;
                case ($marks >= 41 && $marks <=50):
                    echo "<p style='color:green'>Congratulation!! You have succesfully cleared this exam with <b> C2 Grade</b></p>";
                    break;
                case ($marks >= 51 && $marks <=60):
                    echo "<p style='color:green'>Congratulation!! You have succesfully cleared this exam with <b> C1 Grade</b></p>";
                    break;
                case ($marks >= 61 && $marks <=70):
                    echo "<p style='color:green'>Congratulation!! You have succesfully cleared this exam with <b> B2 Grade</b></p>";
                    break;
                case ($marks >= 71 && $marks <=80):
                    echo "<p style='color:green'>Congratulation!! You have succesfully cleared this exam with <b> B1 Grade</b></p>";
                    break;
                case ($marks >= 81 && $marks <=90):
                    echo "<p style='color:green'>Congratulation!! You have succesfully cleared this exam with <b> A2 Grade</b></p>";
                    break;
                case ($marks >= 91 && $marks <=100):
                    echo "<p style='color:green'>Congratulation!! You have succesfully cleared this exam with <b> A1 Grade</b></p>";
                    break;
                default:
                echo "Please enter valid entry!";
                    break;
            }

        ?>
    </fieldset>
</body>

</html>