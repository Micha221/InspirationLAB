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
                $id = $_SESSION['User_ID'];
                $sql = "select * from users where User_ID = '$id'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $firstname =  $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $curPassword = $row['keyword'];
                $newPassword = $_POST["newPassword"];
                $birthdate = $_POST["birthdate"];
                $newPasswordHashed = password_hash($newPassword, PASSWORD_DEFAULT);
                $sqlInsert = "UPDATE users SET firstname = '$firstname', lastname= '$lastname',keyword = '$newPasswordHashed', email = '$email', birthdate = '$birthdate' WHERE User_ID = '$id';";
                if(password_verify($password,$row['keyword'])){
                    if(mysqli_query($conn, $sqlInsert)){
                        echo "<h1><center>Account information succesfully changed</h1>";}
                   else{echo"Something went wrong on our side :/";}
                }else{echo "<h1><center>Password incorrect</h1>"; }
                $id = $_SESSION['User_ID'];
                $_SESSION['firstname'] = $firstname;
                $_SESSION['lastname'] = $lastname;
                $_SESSION['birthdate'] = $birthdate;
                $_SESSION['email'] = $email;

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