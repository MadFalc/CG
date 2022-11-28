<?php

class Taxi
{

    // PROPERTIES
    public $taxinr;
    public $ritjesLength;
    public $ritjesBeginTijden;
    public $ritjesEindTijden;

    public const PERKM = 0.50;
    public const PERMIN = 0.17;

    // CONSTRUCTOR
    function __construct($taxinummer)
    {
        $this->taxinr = $taxinummer;
        $this->ritjesLength = [];
        $this->ritjesBeginTijden = [];
        $this->ritjesEindTijden = []; //Meerdere arrays. Alle info apart, maar zelfde volgorde
    }

    // METHODS
    // lijstjes maken:
    public function addRitjeLength($kilometer)
    {
        array_push($this->ritjesLength, $kilometer);
    }

    public function addRitjeBeginTijden($tijd)
    {
        array_push($this->ritjesBeginTijden, $tijd);
    }

    public function addRitjeEindTijden($tijd)
    {
        array_push($this->ritjesEindTijden, $tijd);
    }


    public function taxiTime($vertrektijd, $aankomsttijd)
    {
        $date1 = new DateTime($vertrektijd);
        $date2 = new DateTime($aankomsttijd);
        $interval = $date1->diff($date2);
        echo "Iemand heeft " . $interval->days . " dagen, " . $interval->h . " uur(en) en " . $interval->i . " minuten  in " . $this->taxinr . " gezeten.<br>" . $date1->format('N') . $date2->format('N') . "<br> Dit is in totaal " . $interval->days * 24 * 60 + $interval->h * 60 + $interval->i . " minuten.<br>";
    }
}

?>