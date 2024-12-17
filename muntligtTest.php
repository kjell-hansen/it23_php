<?php

$lista=["2"=> 'Hello', "World"];


foreach ($lista as $index => $item) {
    echo "<p>$index</p>";
    for ($i = 0; $i < strlen($item); $i++) {
        $a .= substr($item,$i,1);
        echo "$a <br>";
    }
}