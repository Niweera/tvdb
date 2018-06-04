<?php
$server = "ricky.heliohost.org";
$username = "nipuna_guest";
$password = "guest";
$dbname = "nipuna_tvdb";

$conn = mysqli_connect($server,$username,$password,$dbname);
mysqli_set_charset($conn,"utf8");

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}


