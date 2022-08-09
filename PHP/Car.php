<?php
require_once('account.php');
class Car {
    public $id;
    public $license;
    public $driver;
    protected $passenger;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }
    
    public function printDataCar() {
        if ($this->passenger != ""){
        echo "
            Licencia: $this->license 
            <br>Driver: {$this->driver->name} 
            <br>Número de pasajeros: $this->passenger <br>
        ";
        }
    }

    public function getPassenger(){
        return $this->passenger;
    }

    public function setPassenger($passenger){
        if ($passenger == 4){
            $this->passenger = $passenger;
        } else{
            echo "Necesitas al menos 4 ocupantes<br>";
        }
    }
    
}
?>
