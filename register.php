<?php
session_start();

    include "php_library/connection.php";

    // $database = new Database();
    // $database->createConnection();

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $birthdate = $_POST["birthdate"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $Confpassword = $_POST["Confpassword"];

    $sqlGet = "select * from users;";
    $User = $database->getQuery($sqlGet);
    $result = mysqli_query($conn, $sqlGet);
    $resultCheck = mysqli_num_rows($result);
    
    // $sqlInsert = "INSERT INTO users (firstname, lastname, email, birthdate, gender, password ) values ('$firstname', '$lastname', '$email', '$bithdate', '$gender','$password')";
    // $database->InsertQuery($sqlInsert)

    if ($password == $Confpassword) {
        
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="assets/css/register.css">
    </head>
    <body>
            <div class="space">
            <h1>Register</h1>
            <form method="POST" action="">
            <div>
                <label for="form-firstname">
                    Firstname
                </label>
                <br>
                <input type="text" name="firstname" id="form-firstname" value="<?php echo $_POST['firstname']; ?>" required>
            </div>
            <br>
            <div>
                <label for="form-lastname">
                    Lastname
                </label>
                <br>
                <input type="text" name="lastname" id="form-lastname" value="<?php echo $_POST['lastname']; ?>" required>
            </div>
            <br>
            <div>
                <label for="form-email">
                    email
                </label>
                <br>
                <input type="text" name="email" id="form-email" value="<?php echo $_POST['email']; ?>"required>
            </div>
            <br>
            <div class="form-Birthdate">
                <label for="form-birthdate">
                    Birthdate
                </label>
                <br>
                    <input type="date" name="birthdate" value="<?php echo $_POST['birthdate']; ?>"required>
            </div>
            <br>
            <div>
                <label for="form-pref-gender" value="<?php echo $_POST['gender']; ?>">
                    Gender
                </label>

                <br>
                <select name="pref-gender" id="form-pref-gender">
                    <option value="male">
                        Male
                    </option>
                    <option value="Female">
                        Female
                    </option>
                    <option value="x">
                        x
                    </option>
                </select>
            </div>
            <br>
            <div>
                <label for="form-password">
                    Password
                </label>
                <br>
                <input type="password" name="password" id="form-password value="<?php echo $_POST['password']; ?>"" required>
            </div>
            <br>
            <div>
                <label for="form-passwordRepeat">
                    Confirm password
                </label>
                <br>
                <input type="password" name="Confpassword" id="form-Confpassword" value="<?php echo $_POST['Confpassword']; ?>" required>
            </div>
            </div>
            <br>
            <button class="button" id="button-accComplete" onclick="location.href='index.php'">Create Account</button>
            <br>
            <br>
            <a href="login.php" id="alreadyAccount" >Already have an account? Click here!</a>
    </body>
</html>