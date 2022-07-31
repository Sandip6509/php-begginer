<?php
if (isset($_POST['submit'])) {
    $amount = $_POST['amount'];
    $amount = $_POST['year'];
    $rate = $_POST['rate'];

    $si = $amount * $amount * $rate/100;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Interest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>write a php program in which enter amount year rate by form and find the simple interest</h1>
        <form method="post">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Amount</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="amount" value="" placeholder="Enter principal"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Year</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="year" value="" placeholder="Enter time period"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Rate</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="rate" value="" placeholder="Enter rate of interest"/>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
        </form>
        <?php
            if($si != ""){
                echo "<h3>Simple Intrest = $si</h3>";
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>