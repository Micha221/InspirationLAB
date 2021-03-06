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
    <?php
        include "db.php"; 
        session_start();
        $conn = create_connection();
    ?>
        <div class="trying">
            <div class="space">
            <h1>Register</h1>
            <form method="POST" action="add.php">
            <div>
                <label for="firstname">
                    Firstname
                </label>
                <br>
                <input type="text" name="firstname" id="firstname" required>
            </div>
            <br>
            <div>
                <label for="form-lastname">
                    Lastname
                </label>
                <br>
                <input type="text" name="lastname" id="form-lastname" required>
            </div>
            <br>
            <div>
                <label for="form-email">
                    email
                </label>
                <br>
                <input type="text" name="email" id="form-email" required>
            </div>
            <br>
            <div class="form-Birthdate">
                <label for="form-birthdate">
                    Birthdate
                </label>
                <br>
                    <input type="date" name="birthdate" required>
            </div>
            <br>
            <div>
                <label for="form-pref-gender">
                    Gender
                </label>

                <br>
                <select name="sexOption">
                    <option value="male">male</option>
                    <option value="female">female</option>
                    <option value="x">x</option>
                </select>
            </div>
            <br>
            <div>
                <label for="form-password">
                    Password
                </label>
                <br>
                <input type="password" name="password" id="password" required>
            </div>
            <br>
            </div>
            <br>
            <button class="button" id="button-accComplete">Create Account</button>
            <br>
            <br>
            <a href="login.php" id="alreadyAccount" >Already have an account? Click here!</a>
        </form> 
        </div>
            <script src="assets/js/registratie.js"></script>
    </body>
</html>