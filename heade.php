<?php

    // header("Refresh:5; url = page1.php"); //reload page
    echo "<h1>This is Header PAge</h2>";

    header("Expire: Sun, 20 December 2023 06:40:00 GMT ");
    header("Cache-Control: no-cache");
    header("Pragma: no-cache");

    echo "<pre>";
    print_r(headers_list());

    header("Content-type: application/pdf"); // forcefully download file
    header("Content-Disposition: attachment; filename = vipul_1.pdf");
    readfile("vipul_1.pdf");

?>