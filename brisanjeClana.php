<?php

$hostName = "localhost";
$username = "root";
$password = "";
$dbname = "forum";
$connection = new mysqli($hostName, $username, $password, $dbname);

$sqlQuery = "DELETE from clan where id=" . $_GET['clanId'];
$connection->query($sqlQuery);

echo "<script type='text/javascript'>
    alert('Član je obrisan!');
    location='prikazClanova.php';</script>";
