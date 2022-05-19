<?php
    require_once "db.php";
    $conn = Create_connection();
    $json = array();
    $sqlQuery = "SELECT * FROM calendar Where fromUser = 1";

    $result = mysqli_query($conn, $sqlQuery);
    $eventArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($eventArray, $row);
    }
    mysqli_free_result($result);

    mysqli_close($conn);
    echo json_encode($eventArray);
?>