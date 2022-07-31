<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_FILES</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>$_FILES</legend>
            <label for="file">File Upload</label>
            <input type="file" name="files">
            <input type="submit" name="submit">
            <hr>
            <?php
                echo "<pre>";
                print_r($_FILES);
            ?>
        </fieldset>
    </form>
</body>
</html>