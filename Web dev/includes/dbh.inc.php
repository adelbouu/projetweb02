<?php

$servername = "localhost";
$servername = "root";
$dBPassword = "";
$dBName = "phpproject01";

$conn = mysql_connect($servername, $servername, $servername, $dBName);


if(!$conn)  {
    die("Connection failed: " . mysql_connect_error());
}

?>