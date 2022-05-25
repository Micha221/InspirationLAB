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
        include('db.php');
        ob_start();
        session_start();
        $conn = create_Connection();
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "select * from users where email = '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $_SESSION['User_ID'] = $row['User_ID'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['birthdate'] = $row['birthdate'];
        if($count == 1){
            if(password_verify($password, $row['keyword'])){
                echo "<h1><center> Login successful </center></h1>";
            }else{echo "<h1><center> Login failed. Invalid username or password.</center></h1>";}
        }
        else{
            echo "<h1><center> Login failed. Invalid username or password.</center></h1>";
        }
    ?>
    <script>
        if(document.querySelector("h1").innerHTML == "<center> Login successful </center>"){
            setTimeout(function() {
        window.location.replace('index.php');
        }, 3000);}
        else {setTimeout(function() {
        window.location.replace('login.php');
        }, 3000);}
    </script>
</body>
</html>