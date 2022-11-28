<?php
// Instantiate nieuwe boekhouding:
$boekhouden = new Boekhouden();
// Taxi's aanmaken:
$taxi1 = new Taxi(313);
$taxi2 = new Taxi(343);
$taxi3 = new Taxi(117);
$taxi4 = new Taxi(69);
$taxi5 = new Taxi(007);
$taxi6 = new Taxi(420);
$taxi7 = new Taxi(518);
// Ritjes toevoegen Taxi 1:
$taxi1->addRitjeLength(9);
$taxi1->addRitjeLength(5);
$taxi1->addRitjeLength(14);
$taxi1->addRitjeBeginTijden("2007-03-24 03:11");
$taxi1->addRitjeBeginTijden("1990-09-01 01:17");
$taxi1->addRitjeBeginTijden("2022-11-22 14:00");
$taxi1->addRitjeEindTijden("2009-06-26 17:56");
$taxi1->addRitjeEindTijden("1990-09-02 12:34");
$taxi1->addRitjeEindTijden("2022-11-22 14:44");
// Ritjes toevoegen Taxi 2:
$taxi2->addRitjeLength(7);
$taxi2->addRitjeLength(33);
$taxi2->addRitjeBeginTijden("2022-11-27 03:11");
$taxi2->addRitjeBeginTijden("2022-11-27 01:17");
$taxi2->addRitjeEindTijden("2022-11-27 17:56");
$taxi2->addRitjeEindTijden("2022-11-28 14:00");
// Ritjes toevoegen Taxi 3:
$taxi3->addRitjeLength(22);
$taxi3->addRitjeLength(15);
$taxi3->addRitjeLength(1);
$taxi3->addRitjeBeginTijden("2022-11-25 03:11");
$taxi3->addRitjeBeginTijden("2022-11-27 01:17");
$taxi3->addRitjeBeginTijden("2022-11-27 12:34");
$taxi3->addRitjeEindTijden("2022-11-28 17:56");
$taxi3->addRitjeEindTijden("2022-11-27 14:00");
$taxi3->addRitjeEindTijden("2022-11-27 14:44");
// Taxi's aan de boekhouding toevoegen:
$boekhouden->addTaxi($taxi1);
$boekhouden->addTaxi($taxi2);
$boekhouden->addTaxi($taxi3);

var_dump($taxi1->ritjesLength);
echo "<br>";
var_dump($taxi1->ritjesBeginTijden);
echo "<br>";
var_dump($taxi1->ritjesEindTijden);
echo "<br>";
var_dump($taxi2->ritjesLength);
echo "<br>";
var_dump($taxi2->ritjesBeginTijden);
echo "<br>";
var_dump($taxi2->ritjesEindTijden);
echo "<br>";
var_dump($taxi3->ritjesLength);
echo "<br>";
var_dump($taxi3->ritjesBeginTijden);
echo "<br>";
var_dump($taxi3->ritjesEindTijden);
echo "<br>";
echo $taxi1->ritjesBeginTijden[0];
echo "<br>";

//Taxitijden:

$taxi1->taxiTime($taxi1->ritjesBeginTijden[0],$taxi1->ritjesEindTijden[0]);
$taxi2->taxiTime($taxi2->ritjesBeginTijden[1],$taxi2->ritjesEindTijden[1]);
$taxi3->taxiTime($taxi3->ritjesBeginTijden[2],$taxi3->ritjesEindTijden[2]);
?>