<?php
require_once "db.php";
$conn = Create_connection();

$id = $_POST['id'];
$title = $_POST['title'];
$date = $_POST['date'];

$sqlUpdate = "UPDATE calendar SET title='" . $title . "',date='" . $date;
mysqli_query($conn, $sqlUpdate);
mysqli_close($conn);

?>