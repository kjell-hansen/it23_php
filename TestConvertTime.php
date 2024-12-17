<?php
declare(strict_types=1);
require_once "ConvertTime.php";

echo testHeltimme() . "<br>";
echo testHalvtimme() . "<br>";
echo testKvartOver() . "<br>";
echo testKvartI() . "<br>";
echo testTjugoOver() . "<br>";

function testHeltimme(): string {
    $tid = "3:00";
    $forvantat = "prick 3";
    $svar = ConvertTime($tid);
    if ($svar === $forvantat) {
        return __FUNCTION__ . " OK";
    } else {
        return __FUNCTION__ . " misslyckades förväntat svar: $forvantat returnerat svar: $svar";
    }
}

function testHalvtimme(): string {
    $tid = "3:30";
    $forvantat = "halv 4";
    $svar = ConvertTime($tid);
    if ($svar === $forvantat) {
        return __FUNCTION__ . " OK";
    } else {
        return __FUNCTION__ . " misslyckades förväntat svar: $forvantat returnerat svar: $svar";
    }
}
function testKvartOver(): string {
    $tid = "3:15";
    $forvantat = "kvart över 3";
    $svar = ConvertTime($tid);
    if ($svar === $forvantat) {
        return __FUNCTION__ . " OK";
    } else {
        return __FUNCTION__ . " misslyckades förväntat svar: $forvantat returnerat svar: $svar";
    }
}
function testKvartI(): string {
    $tid = "3:45";
    $forvantat = "kvart i 4";
    $svar = ConvertTime($tid);
    if ($svar === $forvantat) {
        return __FUNCTION__ . " OK";
    } else {
        return __FUNCTION__ . " misslyckades förväntat svar: $forvantat returnerat svar: $svar";
    }
}
function testTjugoOver(): string {
    $tid = "3:20";
    $forvantat = "tjugo över 3";
    $svar = ConvertTime($tid);
    if ($svar === $forvantat) {
        return __FUNCTION__ . " OK";
    } else {
        return __FUNCTION__ . " misslyckades förväntat svar: $forvantat returnerat svar: $svar";
    }
}