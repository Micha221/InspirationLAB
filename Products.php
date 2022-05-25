<?php
    include 'db.php';
    session_start();
    
$myfile = fopen("scrapeToPhp.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("scrapeToPhp.txt"));
fclose($myfile);
echo $myfile;
?>
    