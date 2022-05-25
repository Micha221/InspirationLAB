<?php
    include 'db.php';
    session_start();
    $conn = create_connection();
    $fromUser = $_SESSION['User_ID'];
    $sql = "SELECT * FROM gift_for where fromUser = $fromUser";
    $result = mysqli_query($conn, $sql);
    echo $fname;
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>qmjsdfmqfkjjsdfqj</p>
</body>
</html>