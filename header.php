<?php
    // header("Location:page.php");
    // header("Refresh:5; url=page.php");
    echo "<h1>This is home page</h1>";
    header("Expire: Sat, 6 August 2022 10:14:00 GMT");
    header("Cache-Control: no-cache");
    header("Pragma: no-cache");
    echo "<pre>";
    print_r(headers_list());
    header("Content-type: application/pdf");
    header("Content-Disposition: attachment; filename = sample.pdf");
    readfile("demo.pdf");
?>