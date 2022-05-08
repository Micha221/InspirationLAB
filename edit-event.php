<?php
require_once "db.php";

$id = $_POST['id'];
$title = $_POST['title'];
$date = $_POST['date'];

$sqlUpdate = "UPDATE calendar SET title='" . $title . "',date='" . $date . "',end='" . $end;
mysqli_query($conn, $sqlUpdate);
mysqli_close($conn);

?>