<?php
$server = "niwder.me";
$username = "root";
$password = "srilanka";
$dbname = "tvdb";
$conn = mysqli_connect($server,$username,$password,$dbname);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}


