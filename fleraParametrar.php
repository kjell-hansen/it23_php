<?php
declare(strict_types=1);

// Ange kopplingsinfo
$dsn='mysql:dbname=world;host=localhost';
$user='root';$password='';

// Koppla mot databasen
$db=new PDO($dsn, $user, $password);

// Förbered statement
$stmt=$db->prepare("select name, population from city where district=:dist and population>:population");

if($stmt->execute(['dist'=>"Scotland", 'population'=>"200000"])){
    while ($row=$stmt->fetch()){
        echo "$row[name] - $row[population]<br>";
    }
}