<?php
    include "db.php";
    $conn = create_Connection();
    session_start();
    $id = $_SESSION['User_ID'];
    $sql = "select * from users;";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="FullCalendar/fullcalendar/fullcalendar.min.css" />
    <script src="FullCalendar/fullcalendar/lib/jquery.min.js"></script>
    <script src="FullCalendar/fullcalendar/lib/moment.min.js"></script>
    <script src="FullCalendar/fullcalendar/fullcalendar.min.js"></script>

    <title>GoPresent</title>
</head>
<body>
    <div class="trying">
    <div class="space">
        <div>  
            <img src="assets/img/logo.png" id="logo" onclick="window.location.href='index.php'">
        </div>
        <nav>
            <!-- <button class="button" id="kalenderButton" onclick="window.location.href='Kalender.php'">Kalender</button> -->
            <!-- <button class="button" id="OverzichtButton" onclick="window.location.href='Overzicht.php'">Overzicht</button> -->
            <button class="button" id="HelpButton"onclick="window.location.href='help.php'">Help</button>
            <button class="adminButton" id="adminButton" onclick="window.location.href='admin.php'">Admin</button>
            <button class="button" id="ListAddedPersons" onclick="window.location.href='ListAddedPersons.php'">Added Persons</button>
            <button id="InstellingenButton" onclick="window.location.href='settings.php'">Settings</button>
            <button id="logoutButton" onclick="window.location.href='logout.php'">Log out</button>
        </nav>
    </div>
    <div>
        <table>
            <tr>
                <td>User_ID</td>
                <td>firstname</td>
                <td>lastname</td>
                <td>birthdate</td>
                <td>gender</td>
                <td>email</td>
            </tr>
        <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)):?>
            <tr>
                <td><?php echo $row['User_ID'];?></td>
                <td><?php echo $row['firstname'];?></td>
                <td><?php echo $row['lastname'];?></td>
                <td><?php echo $row['birthdate'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><form method="POST"><button id="<?php echo $row['User_ID'];?>" name="delete" value="<?php echo $row['User_ID']?>">Delete</button></td></form>
                <br>
                <br>
            </tr>
            <?php endwhile;?>
        </table>
    </div>
    <?php 
        if (isset($_POST["delete"]))
        {
            $deleteID =  $_POST["delete"];
            $sql = "DELETE FROM users WHERE `users`.`User_ID` = $deleteID";
            $result = mysqli_query($conn, $sql);
            header('Location: admin.php');
        };
    ?>
</body>
</html>