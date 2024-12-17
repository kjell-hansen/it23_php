<?php
$stad="";
if($_SERVER['REQUEST_METHOD']==="POST") {
    $stad=filter_input(INPUT_POST, 'stad', FILTER_SANITIZE_SPECIAL_CHARS);
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sök städer</title>
</head>
<body>
<form method="post">
    Villkor: <input name="stad" value="<?= $stad ?>" placeholder="Ange villkor"> <br>
    <input type="submit" value="Sök!">
</form>
<?php
    if($stad!=="") {
        // Koppla databas
        $host='localhost';$user="root";$pwd="";
        $dbConn=mysqli_connect($host, $user, $pwd, 'world');
        if(mysqli_connect_errno()) {
            echo "Koppling misslyckades", mysqli_connect_error();
            exit();
        }

        // Skicka fråga
        $sql="SELECT name from city where name like '$stad%'";
        $result=mysqli_query($dbConn, $sql);

        // Ta hand om svar
        if($result && mysqli_num_rows($result)) {
            while($rad=mysqli_fetch_array($result)) {
                echo "$rad[name]<br>";
            }
        } else {
            echo "Inga rader matchade villkoret: '$stad'";
        }

        // Stänga databaskoppling
        mysqli_close($dbConn);
    }
?>
</body>
</html>