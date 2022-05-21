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
                <?php 
                include "db.php"; 
                session_start();
                $conn = create_connection();
                $firstname =  $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $birthdate = $_POST["birthdate"];
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $id = $_SESSION['User_ID'];


                $sqlInsert = "UPDATE users SET firstname = '$firstname', lastname= '$lastname', email = '$email', birthdate = '$birthdate' WHERE User_ID = '$id';";
                 if(mysqli_query($conn, $sqlInsert)){
                     echo "<h1><center>Account information succesfully changed</h1>";}
                else{echo"Something went wrong on our side :/";}
                ?>
            <br>
            <br>
        </div>
        <script>
            setTimeout(function() {
        window.location.replace('settings.php');
        }, 3000);
        </script>
    </body>
    
</html>
