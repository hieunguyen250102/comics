<?php
function getConnection()
{
   $dbHost = ("mysql:host=localhost; dbname=crowxworst");
    $dbUser = "root";
    $dbPass = "";
    $conn = new PDO($dbHost, $dbUser, $dbPass);
    return $conn; 
}

