<?php
// Definiera det svenska alfabetet
$alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZÅÄÖ';
 
// Definiera vokaler och konsonanter i det svenska alfabetet
$vowels = ['A', 'E', 'I', 'O', 'U', 'Y', 'Å', 'Ä', 'Ö'];
$consonants = ['B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z'];
 
// Loopa genom varje bokstav i alfabetet
for ($i = 0; $i < strlen($alphabet); $i++) {
    // Hämta den aktuella bokstaven
    $letter = $alphabet[$i];
 
    // Bestäm om bokstaven ska vara versal eller gemen
    if ($i % 2 == 0) {
        $formattedLetter = strtoupper($letter); // Versal
    } else {
        $formattedLetter = strtolower($letter); // Gemen
    }
 
    // Bestäm om bokstaven ska vara understruken
    if (($i + 1) % 3 == 0) {
        $underlined = true;
    } else {
        $underlined = false;
    }
 
    // Bestäm färg för bokstaven (blå för vokaler, röd för konsonanter)
    if (in_array(strtoupper($letter), $vowels)) {
        $color = 'blue';
    } else {
        $color = 'red';
    }
 
    // Bygg HTML för bokstaven med färg och eventuell understrykning
    $html = '<span style="color: ' . $color . ';">' . $formattedLetter . '</span>';
 
    if ($underlined) {
        $html = '<u>' . $html . '</u>';
    }
 
    // Skriv ut bokstaven
    echo $html;
}
?>