<?php
$user = "root";
$pass = "root";
$db = "study";
$port = "19542";

$conn = mysqli_connect("localhost:".$port, $user, $pass);

if (!$conn) die("Нет соединения с MySQL");
mysqli_select_db($conn, $db) or die ("Нельзя открыть базу данных: $db");
?>