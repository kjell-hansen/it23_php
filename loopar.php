<?php

// Skriv ut 10 slumpade tärningskast
for($i=1;$i<=10;$i++) {
    // rand(1,6) ger ett slumptal mellan 1 och 6
    echo "Tärning $i visar:" . rand(1,6) . "<br>";
}

echo "<hr>ForEach<br>";
// Initiera en array med 6 element
for ($i=1;$i<=6;$i++) {
    $tarning[$i]=0;
}

// Slumpa 10 tärningskast
for($i=1;$i<=10;$i++) {
    $slag=rand(1,6);    // Värdet av detta kast
    $tarning[$slag]++;  // Öka elementet
}

// Visa resultaten
foreach($tarning as $varde=>$antal) {
    echo "Du fick $antal $varde:or<br>";
}

echo "<hr>While<br>";
// Startvärden på tärning och antal slag
$tarning=$antalSlag=0;
while ($tarning!=6) {
    $tarning=rand(1,6);
    $antalSlag++;
}
echo "Du behövde $antalSlag slag för att få en 6:a";

echo "<hr>Do ... While<br>";
$i=0;
do {
    $tarning=rand(1,6);
    $i++;    
} while ($tarning!=6); // Fortsätt om det inte blev en 6:a
echo "Du behövde $i slag för att få en 6:a";
