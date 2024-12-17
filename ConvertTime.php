<?php
declare(strict_types=1);
function ConvertTime(string $tid): string {
    try {
        $datum = date("H:i", strtotime($tid));
        [$timme, $minut] = explode(":", $datum);
        $timme = (int)$timme;
        switch ($minut) {
            case "00":
                $tidStrang = "prick $timme";
                break;
            case "15":
                $tidStrang = "kvart över $timme";
                break;
            case "20":
                $tidStrang = "tjugo över $timme";
                break;
            case "30":
                $tidStrang = "halv " . $timme + 1;
                break;
            case "45":
                $tidStrang = "kvart i " . $timme + 1;
                break;
            default:
                if ($minut < 30) {
                    $tidStrang = "$minut över $timme";
                } else {
                    $tidStrang = 60 - $minut . " i " . $timme + 1;
                }
        }
        return $tidStrang;
    } catch (Exception $e) {
        return "Felaktig tid\n" . $e->getMessage();
    }
}