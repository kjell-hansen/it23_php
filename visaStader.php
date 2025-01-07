<?php
declare(strict_types=1);

$dsn='mysql:dbname=world;host=localhost';
$user='root';$password='';

$db=new PDO($dsn, $user, $password);

$result=$db->query("SELECT Name from City ORDER BY ID LIMIT 10");

while($row=$result->fetch()){
    echo "Namn: $row[Name]<br>";
}