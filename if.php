<?php

$a=true;
$b="Hej";

if($a>$b) {
    echo "a ($a) är större än b ($b)";
} elseif($a===$b) {
    echo "a ($a) är lika med b ($b)";
} else {
    echo "a ($a) är mindre än b ($b)";
}