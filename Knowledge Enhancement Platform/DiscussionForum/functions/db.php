<?php
$host = "localhost";
$user = "root";
$pwd  = "";
$db   = "kefdb";
$con = mysqli_connect($host,$user,$pwd,$db) or die("Could not connect");
mysqli_select_db($db,$con) or die("No database");

?>
