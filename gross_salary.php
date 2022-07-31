<?php
    if(isset($_POST['submit']))
    {
        $basic_salary = $_POST['basic_salary'];
        $dallowance = $_POST['da'] * $basic_salary;
        $house_rent = $_POST['hr'] * $basic_salary;
        $pf = $_POST['pf'];
        $gross_salary = $basic_salary + $dallowance + $house_rent - $pf;
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
        <h1>write a php program in which enter basic salary,DA,HRA,PF by form and find the Gross Salary</h1>
        <form method="post">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Basic Salary</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="basic_salary" value="" placeholder="Enter Basic Salary"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">DA</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="da" value="" placeholder="Enter DA"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">HRA</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="hra" value="" placeholder="Enter HRA"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">PF</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="pf" value="" placeholder="Enter PF"/>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
        </form>

        <?php
            if($gross_salary !=""){
                echo "Gross Salary = $gross_salary";
            }
        ?>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>