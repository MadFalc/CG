<?php

class Ritjes
{

    // PROPERTIES
    public $ritjesTaxiNummer;
    public $ritjesLength;
    public $ritjesBeginTijden;
    public $ritjesEindTijden;

    public const PERKM = 0.50; //Prijs per gereden km per rit.
    public const PERMIN = 0.17; //Prijs per minuut gereden per rit.
    public const TOESLAG = 1.15; //De prijs gaat 15% omhoog in weekendtijden (vrijdag vanaf 22 en maandag voor 7 en ertussen).

    // CONSTRUCTOR
    function __construct()
    {
        $this->ritjesTaxiNummer = [];
        $this->ritjesLength = [];
        $this->ritjesBeginTijden = [];
        $this->ritjesEindTijden = []; //Meerdere arrays. Alle info apart, maar zelfde volgorde.
    }

    // METHODS
    // Informatie van de ritten toevoegen:
    public function addRitje($nummer, $kilometer, $tijd1, $tijd2)
    {
        array_push($this->ritjesTaxiNummer, $nummer);
        array_push($this->ritjesLength, $kilometer);
        array_push($this->ritjesBeginTijden, $tijd1);
        array_push($this->ritjesEindTijden, $tijd2);
    }

    //Gemiddelde afstanden over alle gereden ritten:
    public function avgDistance()
    {
        $averageDistance = array_sum($this->ritjesLength) / count($this->ritjesLength);
        return $averageDistance;
    }

    //Langste ritafstand:
    public function highestDistance()
    {
        $highestDistance = $this->ritjesLength[0];
        foreach ($this->ritjesLength as $length) {
            if ($highestDistance < $length) {
                $highestDistance = $length;
            }
        }
        return $highestDistance;
    }
    //De tijden berekenen per rit:
    public function taxiTime($vertrektijd, $aankomsttijd)
    {
        $date1 = new DateTime($vertrektijd);
        $date2 = new DateTime($aankomsttijd);
        $interval = $date1->diff($date2);
        $beginDag = $date1->format('N'); //Variabele is 1-7=maandag-zondag.
        $beginTijd = $date1->format('H'); //Uren van 00-23
        $totaalMinuten = $interval->days * 24 * 60 + $interval->h * 60 + $interval->i; //Alle minuten van de rit opgeteld.
        // echo "<br>Iemand heeft een rit gehad van " . $interval->days . " dagen, " . $interval->h . " uur(en) en " . $interval->i . " minuten.<br>Eerste dag: " . $date1->format('l') ." Laatste dag: ". $date2->format('l') . "<br> Dit is in totaal " . $totaalMinuten . " minuten.<br>";
        $info = array($beginDag, $beginTijd, $totaalMinuten);
        return $info;
    }
    //Verschuldigde bedrag per rit (allemaal uitprinten):
    public function revenueRitje($ritNummer)
    {
        $eurosAfstand = $this->ritjesLength[$ritNummer] * Ritjes::PERKM;
        $info = $this->taxiTime($this->ritjesBeginTijden[$ritNummer], $this->ritjesEindTijden[$ritNummer]);
        //De info dat hieruit komt is dus info[0]=beginDag, $info[1]=beginTijd, $info[2]=totaalMinuten.
        $eurosMinuten = $info[2] * Ritjes::PERMIN;
        $brutoEuros = $eurosAfstand + $eurosMinuten;
        $nettoEuros = $brutoEuros; // nettoEuros wordt aangepast in het geval van een weekend-toeslag.
        //if toeslagtijd *1.15 en netto bedrag per rit. Anders niet *1.15 en netto bedrag uitprinten.
        if (($info[0] == 5 && $info[1] >= 22) || ($info[0] > 5) || ($info[0] == 1 && $info[1] < 7)) {
            $nettoEuros = number_format($brutoEuros * Ritjes::TOESLAG,2);
            echo "<br>Rit ". $ritNummer+1 . " in taxi ". $this->ritjesTaxiNummer[$ritNummer] .": €".$nettoEuros."(inclusief toeslag).";
        }
        else{
            echo "<br>Rit ". $ritNummer+1 . " in taxi ". $this->ritjesTaxiNummer[$ritNummer] .": €".$nettoEuros."(exclusief toeslag).";

        }
        ;
        return $nettoEuros;
    }
    //Cumulatief de totale inkomsten:
    public function totalRevenueRitjes()
    {
        $i = 0;
        $totaalNettoEuros = 0;
        $euroPerRit = 0;
        foreach ($this->ritjesTaxiNummer as $nr) {
            $euroPerRit = $this->revenueRitje($i);
            $totaalNettoEuros = $euroPerRit + $totaalNettoEuros;
            $i = $i + 1;
        }
        echo "<br> De totaal opbrengst: €" . $totaalNettoEuros . ".";
        return $totaalNettoEuros;
    }
}
?>