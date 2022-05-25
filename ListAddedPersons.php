<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/Listaddedperson.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    include "db.php";
    $conn = create_Connection();
    session_start();
    $id = $_SESSION['User_ID'];
    $sql = "select * from gift_for;";
    $result = mysqli_query($conn, $sql);
    $searchTerm = $_POST['findGift'];
    $sqls = "SELECT product_name, product_price, ProductURL, searchTerm, imageURL FROM products WHERE searchTerm = $searchTerm";
    $results = mysqli_query($conn,$sqls);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <div>
        <table id="table">
            <tr>
                <td>name</td>
                <td>interest</td>
            </tr>
        <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)):?>
            <tr>
                <td><?php echo $row['fname'];?></td>
                <td><?php echo $row['interest'];?></td>
                <td><form method="POST"><button id="<?php echo $row['interest'];?>" name="findGift" value="<?php echo $row['interest']?>">Find Gift</button></td></form>
                <br>
                <br>
            </tr>
            <?php endwhile;?>
        </table>
    </div>
    <?php 
        if (isset($_POST["findGift"]))
        {
            $findGift =  $_POST["findGift"];
            echo $findGift;
            $sql = "DELETE FROM users WHERE `users`.`User_ID` = $deleteID";
            $result = mysqli_query($conn, $sql);
            $interesseFile = fopen("interest.txt", "w");
            fwrite($interesseFile, $findGift);
            fclose($interesseFile);
        };
    ?>
        <button class="button" id="ToIndex" onclick="window.location.href='index.php'">Home</button>
<br>
<br>
    <?php
        $searchTerm = $_POST['findGift'];
    $sqls = "SELECT product_name, product_price, ProductURL, searchTerm, imageURL FROM products where searchTerm = '$searchTerm'";
    $results = mysqli_query($conn,$sqls);
    $productURL = $row['ProductURL'];
    $imageURL = $row['ImageURL'];
    while($row = mysqli_fetch_array($results, MYSQLI_ASSOC)):?>
        <tr>
            <td>Name: <?php echo $row['product_name'];?></td>
            <br>
            <td>Price: <?php echo $row['product_price'];?></td>
            <br>
            <td>Link: <?php echo "<a href=$ProductURL>Buy now!</a>";?></td>
            <br>
            <td> image: <?php echo '<a href="',$imageURL,'">','<input type="image" src="assets/img/winkelwagen.png" name="Submit" "width="70" height="70">','</a>';?></td>
            <br>
            <br>
        </tr>
        <?php endwhile;
        if(isset($_POST['findGift']))
	{
		shell_exec("python scraper.py");
		// echo"success";
	}?>

    <script src="assets/js/listaddedpersons.js"></script>
    </body>
</html>