<?php
session_start();

$username = $_POST['firstname'];
$password = $_POST['password'];
$submit = $_POST['submit'];

if($submit){
if($username&&$password){ // Hier wordt gecontroleerd of alles klopt, wanneer dit goed is, voert hij de code hieronder uit!

$connect /* Zet variabele connect */ = mysqli_connect("localhost", "root") or die ("Kan geen verbinden maken met Database") /* naar mysql_connect */ ;
mysqli_select_db("gopresent") or die ("Database niet gevonden");

$query = mysqli_query("SELECT FROM users WHERE firstname='$username'"); 

$numrows = mysqli_num_rows($query);

if($numrows !=0){

//code to login
while ($row = mysqli_fetch_assoc($query)){
$dbusername = $row['firstname'];
$dbpassword = $row['password'];
}

//check to see if they match!
if($username==$dbusername&&$password==$dbpassword){
header('location: admin.php');
}
else
echo "Onjuist wachtwoord";
}
else
echo "Gebruiker bestaat niet!";

}
else
echo "Voer alsjeblieft het formulier in!";


}

?>