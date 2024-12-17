<?php
declare(strict_types=1);

$dbHost='localhost';$dbUser='root';$dbPassword='';

$db=mysqli_connect($dbHost, $dbUser, $dbPassword, 'world');
if(mysqli_connect_errno()) {
    echo "Anslutningen misslyckades: ", mysqli_connect_error();
    exit();
}

$result=mysqli_query($db, "select name from city order by id limit 10");
echo mysqli_num_rows($result) , " rader returnerades<hr>";
while($row=mysqli_fetch_array($result)) {
    echo $row['name'], "<br>";
}

mysqli_close($db);