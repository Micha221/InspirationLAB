<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets-personadded/css/personaddedstyle.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">
        <title>Account created!</title>
    </head>
    <body>
        <div class="pagesize">
            <h1>Person Added!</h1>
                <?php 
                include "db.php"; 
                $conn = create_connection();
                
                $name =  $_GET["name"];
                $birthdate = $_GET["birthdate"];
                $gender = $_GET['gender'];
                $interest = $_GET['interest'];
                // $event = $_GET['event'];
                // $interest = $_GET['interests'];
                // $hobby = $_GET['hobby'];

                echo $name. "<br>";
                echo $birthdate. "<br>";
                echo $gender. "<br>";
                echo $interest . "<br>";
                // echo $event. "<br>";
                // echo $hobby. "<br>";

                $sqlInsertion = "INSERT INTO gift_for (fname,event_date,sex,interest, fromUser) 
                VALUES('$name','$birthdate','$gender','$interest','1');";
                // if(mysqli_query($conn, $sqlInsertion)){
                //         echo "ja";
                //     }else{echo"nee";}
                ?>
            <br>
            <input type="submit" value="Home" onclick="window.location.href='index.php'">
        </div>
        <script src="assets-personadded/js/personaddedscript.js"></script>
    </body>
</html>