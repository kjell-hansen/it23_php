<?php
declare(strict_types=1);

// Ange kopplingsinfo
$dsn='mysql:dbname=world;host=localhost';
$user='root';$password='';

// Koppla mot databasen
$db=new PDO($dsn, $user, $password);

// Exekvera fråga
$result=$db->query("SELECT name FROM city where district='Scotland'");

// Visa resultatet
while($row=$result->fetch()){
    echo "Namn: ".$row['name']."<br>";
}