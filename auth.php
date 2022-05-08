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
        $conn = create_Connection();
        $email = $_POST['email'];  
        $password = $_POST['password'];  
        $sql = "select * from users where email = '$email' and Keyword = '$password'";
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
            
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }  
    ?>  
    <script>
        setTimeout(function() {
        window.location.replace('index.php');
        }, 3000);
    </script>
</body>
</html>