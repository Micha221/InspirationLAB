<?php
require_once "db.php";
$conn = Create_Connection();
$title = isset($_POST['title']) ? $_POST['title'] : " ";
$start = isset($_POST['start']) ? $_POST['start'] : " ";
$end = isset($_POST['end']) ? $_POST['end'] : " ";

$sqlInserts = "INSERT INTO calendar (title,start,end) VALUES ('".$title."','".$start."','".$end ."')";

$result = mysqli_query($conn, $sqlInserts);

if (! $result) {
    $result = mysqli_error($conn);
}
?>