<?php

//Host
$host = "localhost:3309";

//Database Name
$dbname = "bookstore";

//Username
$user = "root";

//Password
$pass = "";

//Connection to Database
$conn = new PDO("mysql:host=$host;dbname = $dbname", $user, $pass);

//Errors Handling
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($conn) {
    echo "connected successfully";
} else {
    echo "error in db connection";
}
