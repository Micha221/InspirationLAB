<!-- <?php 
    // include 'db.php';
    // session_start();

    // if (!isset($_SESSION['username'])) {
    //     header("Location: index.php");
    // }
?> -->
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
    <?php

    
        // include "add-event.php";
        // include "delete-event.php";
        // include "edit-event.php";
        // include "fetch-event.php";
        // include "db.php";

    ?>
    <title>GoPresent</title>


</head>
<body>
    <div class="space">
        <div>  
            <img src="assets/img/logo.png" id="logo">
        </div>
        <nav>
            <button class="button" id="kalenderButton" onclick="window.location.href='Kalender.php'">Kalender</button>
            <button class="button" id="OverzichtButton" onclick="window.location.href='Overzicht.php'">Overzicht</button>
            <button class="button" id="HelpButton"onclick="window.location.href='Help.php'">Help</button>
            <button class="button" id="AddPersonButton"onclick="window.location.href='AddPerson.php'">Add Person</button>
            <button id="InstellingenButton" onclick="window.location.href='settings.php'">Settings</button>
            <button id="logoutButton" onclick="window.location.href='home.php'">Log out</button>
        </nav>
    </div>
    
    <div class="response"></div>
    <div id='calendar'></div>
    <script src="assets/js/index.js"></script>
</body>
</html>