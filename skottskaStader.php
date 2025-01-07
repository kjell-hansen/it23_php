<?php
declare(strict_types=1);

// Ange kopplingsinfo
$dsn='mysql:dbname=world;host=localhost';
$user='root';$password='';

// Koppla mot databasen
$db=new PDO($dsn, $user, $password);

// Förbered statement
$stmt=$db->prepare("SELECT name FROM city where district=:param");

// Exekvera frågan
$stmt->execute(['param'=>"Scotland"]);

// Visa resultatet
while($row=$stmt->fetch()){
    echo "Namn: ".$row['name']."<br>";
}