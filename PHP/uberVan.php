<?php
require_once('car.php');
class UberVan extends Car {
    public $typeCarAccepted;
    public $seatsMaterial;

    public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial){
        parent::__construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatMaterial = $seatsMaterial; 
    } 
    public function setPassenger($passenger)
    {
        if($passenger == 6){
            $this->passenger = $passenger;
        } else{
            echo "<br> Este vehículo es para 6 personas<br>";
        }
    }
}
?>