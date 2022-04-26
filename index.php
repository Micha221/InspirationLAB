<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Document</title>
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

    <script src="assets/js/index.js"></script>
</body>
</html>