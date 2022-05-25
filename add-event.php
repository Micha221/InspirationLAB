<?php
require_once "db.php";
session_start();
$conn = Create_Connection();
$title = isset($_POST['title']) ? $_POST['title'] : " ";
$date = isset($_POST['date']) ? $_POST['date'] : " ";
$fromUser = $_SESSION['User_ID'];
// $fromUser = isset($_POST['fromUser']) ? $_POST['fromUser'] : " ";

$sqlInserts = "INSERT INTO calendar (title,date, fromUser) VALUES ('".$title."','".$date."',$fromUser)";

$result = mysqli_query($conn, $sqlInserts);

if (! $result) {
    $result = mysqli_error($conn);
}
?>

<script>setTimeout(function() {
        window.location.replace('index.php');
        }, 10);
</script>