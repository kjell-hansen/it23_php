<?php
$mapp=__DIR__;
// Kontrollera att filen finns
if(!is_dir($mapp)) {
    die ("'$mapp' är ingen mapp!");
}

// Läs innehållet till en array
$innehall=scandir($mapp);

// Skriv ut allt
foreach($innehall as $rad){
    is_dir("$mapp/$rad") ? $color="red" : $color="black";
    echo "<span style='color:$color;'>$rad</span> <br>";
}
