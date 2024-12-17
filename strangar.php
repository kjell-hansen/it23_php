<?php
// Dela upp en text
$text="abcdefghijklmnopqrstuvwxyz";
$arr=str_split($text);
foreach($arr as $bokstav){
   echo "$bokstav<br>";
}

// Alternativt...
echo "<hr>";
for($i=0;$i<strlen($text);$i++) {
    echo substr($text,$i,1) . "<br>";
}

// Slumpa ordningen i arrayen
shuffle($arr);
// Skriv ut med / mellan alla bokstäver
$snedstreck=implode( "/",$arr);
echo "$snedstreck<br>";
// Byt / till \
$bsl=str_replace("/", "\\",$snedstreck);
echo "$bsl<br>";

echo "k finns nu i position " . strpos($bsl, "k");

// Dela upp en text
$text .="åäö";
$arr=mb_str_split($text);
foreach($arr as $bokstav){
   echo "$bokstav<br>";
}
echo "<hr>";

// Alternativt...
for($i=0;$i<mb_strlen($text);$i++) {
    echo mb_substr($text,$i,1) . "<br>";
}
// Byt till stora bokstäver
echo strtoupper($text) ."<br>"; // Funkar inte

// Använd mb_convert_case
echo mb_convert_case($text, MB_CASE_UPPER);
