<?php

$kort="skosula";
//$kort="7";
//$kort="jack";
//$kort="queen";
//$kort="king";
echo "Värdet på ditt kort är... ";

switch ($kort) {
	case "ace": // Värdet på $kort är ’ace’
		if($aceHigh) {
			echo 14;
		} else {
			echo 1;
		}
		break;
	case "king": // Värdet på $kort är ’king’
		echo 13;
		break;
	case "queen": // Värdet på $kort är ’queen’
		echo 12;
		break;
	case "jack": // Värdet på $kort är ’jack’
		echo 11;
		break;
	default: // Värdet på $kort är något annat
		if((int) $kort>0 && (int)$kort<11) {
            echo $kort;
        } else {
            echo "felaktigt!";
        }
}