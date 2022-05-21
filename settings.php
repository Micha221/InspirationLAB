<?php 
    include 'db.php';
    session_start();
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/settings.css">
        <link rel="stylesheet" href="assets/css/index.css">
        <title>Settings</title>
    </head>
    <body>
    <div class="space">
        <div>  
            <img src="assets/img/logo.png" id="logo">
        </div>
        <nav>
            <!-- <button class="button" id="kalenderButton" onclick="window.location.href='Kalender.php'">Kalender</button> -->
            <!-- <button class="button" id="OverzichtButton" onclick="window.location.href='Overzicht.php'">Overzicht</button> -->
            <button class="button" id="HelpButton"onclick="window.location.href='help.php'">Help</button>
            <button class="button" id="AddEventButton" onclick=openForm()>Add Event</button>
            <button class="button" id="AddPersonButton"onclick="window.location.href='AddPerson.php'">Add Person</button>
            <button id="InstellingenButton" onclick="window.location.href='settings.php'">Settings</button>
            <button id="logoutButton" onclick="window.location.href='logout.php'">Log out</button>
        </nav>
    </div>
        <h2 id="settingstitle">Settings</h2>
            <form id="changeInfo" method="POST" action="changeInfo.php">
                <div class="info">
                    <div class="changeinfo">
                    <?php echo "firstname: " ?> <input type="text" id="changefirstname" name="firstname"  value="<?php echo $_SESSION['firstname'];?>">
                    </div>
                    <br>
                    
                    <div class="changeinfo">
                        <?php echo "lastname:"?>  <input type="text" id="changelastname" name="lastname" value="<?php echo $_SESSION['lastname'];?>">
                    </div>
                    <br>
                    <div class="changeinfo">
                        <?php echo "email:"?> <input type="text" id="changeemail" name="email"  value="<?php echo $_SESSION['email'];?>"">
                    </div>
                    <br>
                    <div class="changeinfo">
                    <?php echo "birthdate:"?>   <input type="text" id="changebirthdate" name="birthdate"  value="<?php echo $_SESSION['birthdate'];?>"">
                    </div>
                    <br>
                    <div class="changeinfo">
                    <?php echo "current password:"?>   <input type="password" id="currentPassword" name="password">
                    </div>
                    <br>
                    <div class="changeinfo">
                    <?php echo "new password:"?>   <input type="password" id="newPassword" name="newPassword">
                    </div>
                    <br>
                    <div class="changeinfo">
                        <button type="submit" id="buttonchangeinfo"> Change Information</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
