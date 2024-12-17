<?php
$filnamn="c:/windows/win.ini";
// Kontrollera att filen finns
if(!is_file($filnamn)) {
    die ("Filen '$filnamn' saknas!");
}

// Läs filen till en array
$winIni=file($filnamn);

// Skriv ut alla rader
foreach($winIni as $rad){
    echo "$rad <br>";
}
