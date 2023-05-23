<?php
// Server Details Here!
    $dbhost = "localhost:3306";
    $dbuser = "root";
    $dbpass = "";
    $db = "portfolio";

    //CREATE A CONNECTION TO THE DATABASE
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    if(!$connection){
        echo("CONNECTION UNSUCCESFUL!");
    }
?>