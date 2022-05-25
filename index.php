<?php
    include "db.php";
    $conn = create_Connection();
    session_start();
    $id = $_SESSION['User_ID'];
    $sql = "select * from users where User_ID = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
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
    <script src="assets/js/index.js"></script>
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
            <button class="button" id="AddEventButton"onclick=openForm()>Add Event</button>
            <button class="button" id="ListAddedPersons" onclick="window.location.href='ListAddedPersons.php'">Added Persons</button>
            <button id="InstellingenButton" onclick="window.location.href='settings.php'">Settings</button>
            <button id="logoutButton" onclick="window.location.href='logout.php'">Log out</button>
        </nav>
    </div>
    <?php
    $isAdmin = $row['isAdmin'];
    if($isAdmin == 1){
        echo "<p>admin</p>";
    }
    ?>
    <div class="form-popup" id="myForm">
        <form action="add-event.php" class="form-container" method="POST">
            <h1>Add Event</h1>
            <label for="title"><b>Event Name</b></label>
        <br>
                <input type="text" id="title" placeholder="Enter Event name" name="title" required>
        <br>
        <br>
            <label for="date"><b>Event date</b></label>
        <br>
                <input type="date" id="date" name="date" required>
        <br>
<br>        
    <br>
    <button type="submit" value="submit" class="btn" id="addEventButtonPopup">Add event</button>
    <br>
    <br>
    <button type="submit" class="btn cancel" id="cancelEventButtonPopup" onclick="closeForm()">Cancel</button>
  </form> 
</div>
    
    <div class="response"></div>
    <div id='calendar'></div>
    <script>
        if(document.querySelector("p").innerHTML == "admin"){
            document.querySelector(".adminButton").style.visibility = "visible";
        }
    </script>
    </div>
</body>
</html>
