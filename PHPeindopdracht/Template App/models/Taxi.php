<?php

 class Taxi
 {

     // PROPERTIES
     public $taxinr;
     public $vertrek;
     public $aankomst;

     public const PERKM = 0.50;
     public const PERMIN = 0.17;

     // CONSTRUCTOR
     function __construct($taxinummer)
     {
         $this->taxinr = $taxinummer;
     }

     // METHODS
     public function taxiTime($vertrektijd, $aankomsttijd)
     {
         $this->vertrek = $vertrektijd;
         $this->aankomst = $aankomsttijd;
         $date1 = new DateTime($vertrektijd);
         $date2 = new DateTime($aankomsttijd);
         $interval = $date1->diff($date2);
         echo "Iemand heeft " . $interval->days . " dagen, " . $interval->h . " uur(en) en " . $interval->i . " minuten  in " . $this->taxinr . " gezeten.<br>" . $date1->format('N') . $date2->format('N') . "<br>";
     }
 }

 ?>