<?php
    include "db.php";
    $conn = create_Connection();
    session_start();
    $id = $_SESSION['User_ID'];
    $sql = "select * from gift_for;";
    $result = mysqli_query($conn, $sql);
    $searchTerm = $_POST['findGift'];
    $sqls = "SELECT product_name, product_price, ProductURL, searchTerm, ImageURL FROM products WHERE searchTerm = $searchTerm";
    $results = mysqli_query($conn,$sqls);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/Listaddedperson.css" rel="stylesheet" type="text/css">
        <link href="assets/css/index.css" rel="stylesheet" type="text/css">
        <title>Document</title>
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
    <div>
        <h1><center>Press twice to receive a gift</center></h1>
        <table>
            <tr>
                <td>name</td>
                <td>interest</td>
            </tr>
        <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)):?>
            <tr>
                <td><?php echo $row['fname'];?></td>
                <td><?php echo $row['interest'];?></td>
                <td><form method="POST"><button id="<?php echo $row['interest'];?>" name="findGift" value="<?php echo $row['interest']?>">Find Gift</button></td></form>
            </tr>
            <?php endwhile;?>
        </table>    
    </div>
    <?php 
        if (isset($_POST["findGift"]))
        {
            $findGift =  $_POST["findGift"];
            $sql = "DELETE FROM users WHERE `users`.`User_ID` = $deleteID";
            $result = mysqli_query($conn, $sql);
            $interesseFile = fopen("interest.txt", "w");
            fwrite($interesseFile, $findGift);
            fclose($interesseFile);
        };
    ?>
<br>
<br>
    <?php
    $searchTerm = $_POST['findGift'];
    $sqls = "SELECT product_name, product_price, ProductURL, searchTerm, ImageURL FROM products where searchTerm = '$searchTerm'";
    $results = mysqli_query($conn,$sqls);
    $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
    $productURL = $row['ProductURL'];
    $imageURL = $row['ImageURL'];
    ?>
        <tr>
            <td>Name: <?php echo $row['product_name'];?></td><br>
            <td>Price: <?php echo $row['product_price'];?></td><br>
            <td><a href=<?php echo $productURL ?>>Buy Now</a></td><br>
            <td>image: <img src= "<?php echo $imageURL?>"alt=<?php echo $row['product_name'] ?>></td>
            <br>
            <br>
        </tr>
        <?php
        if(isset($_POST['findGift']))
	{
		shell_exec("python scraper.py");
	}?>
    <script src="assets/js/listaddedpersons.js"></script>
    </body>
</html>