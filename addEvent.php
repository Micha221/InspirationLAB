<?php
    include "db.php";

    $Title = $_POST['Title'] ? $_POST['Title'] : "";
    $date = $_POST['Date'] ? $_POST['Date'] : "";

    $sqlInsert = "INSERT INTO calendar (Title, date) VALUES ('$Title', '$date')";
    $result = mysqli_query($conn, $sqlInsert);

?>