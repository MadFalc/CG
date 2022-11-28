<?php

class Boekhouden {

    // PROPERTIES
    public $taxis;

    // CONSTRUCTOR
    function __construct()
    {
        $this->taxis = [];
    }

    public function addTaxi($taxi){
        array_push($this->taxis,$taxi);
    }

    // METHODS
    //gemiddelde afstanden over alle gereden ritten:
    public function averageDistanceAll(){
        
    }

    //De langste ritafstand over alle gereden ritten:


}
?>