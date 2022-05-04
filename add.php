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
            <h1>Account created!</h1>
                <?php 
                include "db.php"; 
                $conn = create_connection();
                
                $firstname =  $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $birthdate = $_POST["birthdate"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $gender = $_POST['sexOption'];
                $isAdmin = 0;

                $getId = "select MAX(User_id) from users";


                $sqlInsert = "INSERT INTO users (firstname,lastname,birthdate,gender,keyword,isAdmin,email) 
                VALUES('$firstname','$lastname','$birthdate','$gender','$password','$isAdmin','$email');";
                echo "Welcome " . $firstname;
                // if(mysqli_query($conn, $sqlInsert)){
                //     echo "ja";
                // }else{echo"nee";}
                ?>
            <br>
            <br>
            <input type="submit" value="Home" onclick="window.location.href='index.php'">
        </div>
        <script src="assets-personadded/js/personaddedscript.js"></script>
    </body>
</html>