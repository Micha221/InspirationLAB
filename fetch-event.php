<?php
    require_once "db.php";
    session_start();
    $conn = Create_connection();
    $json = array();
    $fromUser = $_SESSION['User_ID'];
    $sqlQuery = "SELECT * FROM calendar Where fromUser = $fromUser";

    $result = mysqli_query($conn, $sqlQuery);
    $eventArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($eventArray, $row);
    }
    mysqli_free_result($result);

    mysqli_close($conn);
    echo json_encode($eventArray);
?>