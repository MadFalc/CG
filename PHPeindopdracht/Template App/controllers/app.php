<?php

// Object voor alle ritjes aanmaken aanmaken:
$Boekhouden = new Ritjes();

// Ritjes toevoegen aan de boekhouding:
$Boekhouden->addRitje(313,9,"2007-03-24 03:11","2007-03-24 07:11");
$Boekhouden->addRitje(313,5,"1990-09-01 01:17","1990-09-01 12:34");
$Boekhouden->addRitje(343,14,"2022-11-22 14:00","2022-11-22 14:44");
$Boekhouden->addRitje(313,7,"2022-11-27 03:11","2022-11-27 17:56");
$Boekhouden->addRitje(343,33,"2022-11-27 01:17","2022-11-27 03:00");
$Boekhouden->addRitje(343,22,"2022-11-25 03:11","2022-11-25 17:56");
$Boekhouden->addRitje(117,15,"2022-11-26 01:17","2022-11-26 07:00");
$Boekhouden->addRitje(117,1,"2022-11-27 12:34","2022-11-27 14:44");

//Taxitijden uitprinten:

echo "Er zijn in totaal ". count($Boekhouden->ritjesTaxiNummer) ." ritjes geweest.";
echo "<br>Het eerste ritje bracht €". number_format($Boekhouden->revenueRitje(0),2) ." op.";
echo "<br>Het Tweede ritje bracht €". number_format($Boekhouden->revenueRitje(1),2) ." op.";
echo "<br>De opbrengst van de resterende ritjes:<br>€". number_format($Boekhouden->revenueRitje(2),2) ." €". number_format($Boekhouden->revenueRitje(3),2) ." €". number_format($Boekhouden->revenueRitje(4),2) ." €". number_format($Boekhouden->revenueRitje(5),2) ." €". number_format($Boekhouden->revenueRitje(6),2) ." €". number_format($Boekhouden->revenueRitje(7),2) .".";
echo "<br> De totaal opbrengst van alle ". count($Boekhouden->ritjesTaxiNummer) ." ritjes was €". number_format($Boekhouden->totalRevenueRitjes(),2).".";
echo "<br>Gemiddelde afstand alle ritjes: ". $Boekhouden->avgDistance();
echo "<br>Grootste afstand van enkel ritje: ". $Boekhouden->highestDistance();
?>