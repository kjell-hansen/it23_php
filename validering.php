<?php

$heltal=filter_input(INPUT_GET,"tal", FILTER_VALIDATE_INT);

if($heltal!==false) {
    echo "$_GET[tal] är ett heltal";
}else {
    echo "$_GET[tal] är inget heltal";
}
echo "<hr>";
$namn=filter_input(INPUT_GET, "namn", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
echo "Inmatat namn:$namn";