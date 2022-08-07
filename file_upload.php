<?php
    if(isset($_POST['btn_submit'])){
        $path = 'uploadsa/'.basename($_FILES['upload_file']['name']);
        if(move_uploaded_file($_FILES['upload_file']['tmp_name'],$path)){
            echo `<div class="alert alert-success">
                    Image upload successfully.
                  </div>`;
        }else{
            echo `<div class="alert alert-danger">
                    Image not uploaded.
                  </div>`;
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>File Upload</h1><hr>
        <div class="card" style="width: 70%;">
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="upload_file" class="form-label">File Upload</label>
                        <input class="form-control" type="file" name="upload_file" id="upload_file">
                    </div>
                    <button type="submit" name="btn_submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>