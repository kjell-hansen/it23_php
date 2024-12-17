<?php
declare(strict_types=1);

// set the timezone to use
$ar=filter_input(INPUT_GET, 'ar', FILTER_VALIDATE_INT);
if(is_null($ar) || $ar>2037 || $ar<1970) {
    header("HTTP/1.1 400 Bad request");
    echo "Error 400, Bad request<br>";
    echo "Inparametern 'ar' måste finnas och vara mellan 1970 och 2037";
    exit;
}

$timestamp=easter_date($ar);
$datum=date('Y-m-d', $timestamp);

$json=new stdClass();
$json->År=$ar;
$json->Datum=$datum;

header("Content-type:application/json;charset=UTF-8");
echo json_encode($json, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);