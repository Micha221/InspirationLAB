<?php
require_once "db.php";
$conn = Create_Connection();
$title = isset($_POST['title']) ? $_POST['title'] : " ";
$date = isset($_POST['date']) ? $_POST['date'] : " ";
$fromUser = isset($_POST['fromUser']) ? $_POST['fromUser'] : " ";

$sqlInserts = "INSERT INTO calendar (title,date, fromUser) VALUES ('".$title."','".$date."',1)";

$result = mysqli_query($conn, $sqlInserts);

if (! $result) {
    $result = mysqli_error($conn);
}
?>