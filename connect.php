<?php
session_start();
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "js_revision";


$conn = mysqli_connect($servername, $username, "", $dbname);