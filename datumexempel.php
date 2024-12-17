<?php

echo "Dagens datum i olika format<br>";
echo date("Y-m-d");
echo"<br>";
echo date("D j/n -y h:i a");
echo"<br>";
echo date("j.F -y");
echo"<br>";
echo "1 500 000sekunder sen epoch<br>";
echo date("j.F -y", (int) 1500000);

echo "<hr>strtotime<br>";
echo date("j.F -y", strtotime("2005-05-10"));
echo "<br>";
echo date("j.F -y", strtotime("last Friday of June"));

echo "<br>relativt annat datum<br>";
echo date("j.F -y", strtotime("last Friday of June", strtotime("2020-05-01")));

$tid=strtotime("Sista fredagen i juni");
echo "<br>";
echo date("j.F -y", $tid);
var_dump($tid);

// DateTime-funktioner
echo "<hr>";
$datum=new DateTime();
var_dump($datum);
echo $datum->format("j.F -y");
echo "<br>";
$datum=new DateTime("2020-05-22"); 
echo $datum->format("j.F -y");
echo "<br>";

$datum=new DateTime("last Friday of June");
echo $datum->format("j.F -y");
echo "<hr>";
echo "från annat format<br>";
$datum=DateTime::createFromFormat("d/m/y","04/05/06");
echo $datum->format("Y-m-d");
echo "<br>";
$datum=DateTime::createFromFormat("m/d/y","04/05/06");
echo $datum->format("Y-m-d");
echo "<br>";
$datum=DateTime::createFromFormat("y/m/d","04/05/06");
echo $datum->format("Y-m-d");
echo "<br>";
$datum=DateTime::createFromFormat("y z", "06 150");; // År måste vara före dag!
echo $datum->format("Y-m-d");
echo "<hr>";
echo "DateInterval<br>";
$datum1=new DateTimeImmutable();
$i=DateInterval::createFromDateString('1 year + 2 weeks ');
var_dump($i);
$datum2=$datum1->add($i);
echo "Om " . $i->date_string . " är det " . $datum2->format("Y-m-d");
$dd=$datum1->diff($datum2);
echo "<br>Vilket är " . $dd->format("%a dagar");
var_dump($dd);


echo "<hr>Använder DateTime<br>";
$datum=new DateTime("last Friday of June");
echo $datum->format("j.F -y");
echo "<br>";

$nyttDatum=$datum->add(new DateInterval('P1Y14D'));
echo "Nytt datum: " . $nyttDatum->format('j.F -y');
echo "<br>";
echo "Tidigare datum: " . $datum->format('j.F -y');

echo "<br>Använder DateTimeImmutable<br>";
$datum=new DateTimeImmutable("last Friday of June");
echo $datum->format("j.F -y");
echo "<br>";

$nyttDatum=$datum->add(new DateInterval('P1Y14D'));
echo "Nytt datum: " . $nyttDatum->format('j.F -y');
echo "<br>";
echo "Tidigare datum: " . $datum->format('j.F -y');
echo "<hr>";
