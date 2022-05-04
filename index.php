<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/index.css" rel="stylesheet" type="text/css">
    <link href='calendar/lib/main.css' rel='stylesheet' />
    <link href='calendar/lib/main.min.css' rel='stylesheet'>
    <script src="calendar/lib/locales-all.min.js"></script>
    <script src="calendar/lib/locales-all.js"></script>
    <script src="calendar/lib/main.min.js"></script>
    <script src='calendar/lib/main.js'></script>
    <title>GoPresent</title>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          selectable:true
        });
        
        calendar.render();
      });
    </script>
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
            <button id="InstellingenButton" onclick="window.location.href='Instellingen.php'">Settings</button>
            <button id="logoutButton" onclick="window.location.href='home.php'">Log out</button>
        </nav>
    </div>
    <div id='calendar'></div>
    <script src="assets/js/index.js"></script>
</body>
</html>
