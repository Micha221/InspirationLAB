<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/index.css" rel="stylesheet" type="text/css">
    <title>Document</title>
    <script src="help.js">
    </script>
</head>
<body>
<div class="space">
        <div>
            <img src="assets/img/logo.png" id="logo" onclick="window.location.href='index.php'">
        </div>
        <nav>
            <button class="button" id="HelpButton"onclick="window.location.href='help.php'">Help</button>
            <button class="button" id="AddEventButton" onclick=openForm()>Add Event</button>
            <button class="button" id="ListAddedPersons" onclick="window.location.href='ListAddedPersons.php'">Added Persons</button>
            <button class="button" id="AddPersonButton"onclick="window.location.href='AddPerson.php'">Add Person</button>
            <button id="logoutButton" onclick="window.location.href='logout.php'">Log out</button>
            <button id="InstellingenButton" onclick="window.location.href='settings.php'">Settings</button>
        </nav>
    </div>
    <h1>
        Veel gestelde vragen
    </h1>
    <ol>
        <div>
        <li>
            Hoe voeg ik iemand toe?
                <br>
            je kan iemand toevoegen door op de knop "Add Person" te drukken. Daarna kan je de naam, geboortedatum, geslacht en een interesse ingeven!
        </li> 
        <li>
            Hoe voeg je een event toe?
            <br>
            Je kan een event toevoegen door op de knop "Add Event" te klikken, hierdoor krijg je een popup waar je de info kan ingeven!
        </li>
        <li>
            Kan je je gegevens veranderen?
            <br>
            Ja! Als je op settings klikt, kan je daar je gegevens aanpassen!
        </li>

         </div>
    </ol>
</body>
</html>
