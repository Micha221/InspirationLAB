<?php
    require "db.php";
    session_start();
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
        <?php
            $conn = Create_Connection();
            $fromUser = $_SESSION['User_ID'];
            $sqls = "SELECT fname, event_date, sex, interest from gift_for where fromUser = $fromUser";
            
            $result = mysqli_query($conn, $sqls);

            while($table = mysqli_fetch_array($result)) { 
                echo "name: " . $table['fname'] ."\t". " event_date: " . $table['event_date'] ."\t". "sex: " . $table['sex'] ."\t". "interest: " ."\t". $table['interest'] ;?> <button class="button" id="FindGift">Find Gift</button><br>
                <?php
            }
        ?>

        <button class="button" id="ToIndex" onclick="window.location.href='index.php'">Home</button>
    </body>
</html>