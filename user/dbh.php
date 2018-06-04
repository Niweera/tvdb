<?php
$server = "ricky.heliohost.org";
$username = "nipuna_1";
$password = "Donatelo96";
$dbname = "nipuna_tvdb";

$conn = mysqli_connect($server,$username,$password,$dbname);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}


