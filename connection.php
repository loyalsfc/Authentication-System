<?php

$server = "localhost";
$password = "";
$username = "root";
$database = "userauthentication";

$connection = new mysqli($server, $username, $password, $database);
if ($connection->connect_error) {
    die("Connection Error :".$connection->connect_error);
}
?>