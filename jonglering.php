<?php
$a="1";
var_dump($a);
$a=$a*2;
var_dump($a);
$a=$a*3.14;
var_dump($a);
$a=$a . "cm";
var_dump($a);

echo "<hr>";
$Alder=$_GET["Alder"];
var_dump($Alder);

$Alder=(int) $Alder;
var_dump($Alder);
echo "<hr>";
$a=7;
$b=3*($c=2);
var_dump($b,$c);

$a-=4;
var_dump($a);

echo "<hr>";
var_export('Hej'==0);
var_export('Hej'===0);

var_export('a'<=>'b');
var_export('b'<=>'a');

if('a'==0) {
    echo 'if hände!';
} elseif('a'=='a') {
    echo 'elseif hände';
} else {
    echo 'else hände';
}