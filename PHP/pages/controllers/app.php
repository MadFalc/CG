<?php
// ALL THE CLASSES WITH THEIR BEHAVIOR GO IN HERE.
require 'models/Ritjes.php';

// Object voor alle ritjes aanmaken aanmaken:
$Boekhouden = new Ritjes();

// Ritjes toevoegen aan de boekhouding:
$Boekhouden->addRitje(313, 123, "1990-09-01 01:17", "1990-09-01 12:34");
$Boekhouden->addRitje(313, 70, "2007-03-24 03:11", "2007-03-24 07:11");
$Boekhouden->addRitje(343, 9, "2022-11-22 14:00", "2022-11-22 14:44");
$Boekhouden->addRitje(313, 34, "2022-11-23 23:11", "2022-11-24 01:30");
$Boekhouden->addRitje(343, 23, "2022-11-25 01:17", "2022-11-25 03:00");
$Boekhouden->addRitje(343, 22, "2022-11-26 22:11", "2022-11-27 01:23");
$Boekhouden->addRitje(117, 66, "2022-11-27 01:17", "2022-11-27 07:00");
$Boekhouden->addRitje(117, 69, "2022-11-28 12:34", "2022-11-28 14:44");

//Taxitijden uitprinten:

echo "Er zijn in totaal " . count($Boekhouden->ritjesTaxiNummer) . " ritten geweest.";
echo "<br>Opbrengsten per rit:";
$Boekhouden->totalRevenueRitjes(); //Deze methode werkt samen met andere methodes om alle verdiensten uit te printen.
echo "<br>Gemiddelde afstand alle ritten: " . $Boekhouden->avgDistance();
echo "<br>Grootste afstand van enkel ritten: " . $Boekhouden->highestDistance();
?>