<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_sales_monitoring_system";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    mysqli_select_db($conn, $database);

    // Check connection
    if (!$conn) {
        trigger_error(mysqli_connect_error());
        echo 'not connected';
        } //else echo 'Successfully Connected';
?>