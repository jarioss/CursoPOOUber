<?php 
require_once('car.php');
class UberX extends Car {
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model){
        parent::__construct($license, $driver);
        $this->brand = $brand;
        $this->model = $model;
    }

    public function setPassenger($passenger)
    {
     if($passenger == 4){
         $this->passenger = $passenger;
     } else{
         echo "<br> Este vehículo es para 4 personas";
     }
    }
}
?>