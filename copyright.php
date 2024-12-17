<!DOCTYPE html>
<html lang="sv">
    <head>
        <title>Copyright</title>
        <meta charset="UTF-8">
    </head>
    <body>
<?php
    $startAr="2019";
    $exempelAr=[$startAr, date("Y")];
    
    foreach($exempelAr as $ar) {
        if($ar===$startAr) {
            echo "<p>&copy; Copyright $ar</p>";
        } else {
            echo "<p>&copy; Copyright $startAr -- $ar</p>";
        }
    }
?>
    </body>
</html>