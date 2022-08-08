<?php
require_once('account.php');
class Car {
    public $id;
    protected $license;
    protected $driver;
    protected $passenger;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }
    
    public function printDataCar() {
        echo "
            Licencia: $this->license 
            <br>Driver: {$this->driver->name} 
            <br>Número de pasajeros: $this->passenger <br>
        ";
    }

    public function getPassenger(){
        return $this->passenger;
    }

    public function setPassenger($passenger){
        if ($passenger == 4){
            $this->passenger = $passenger;
        } else{
            echo "Necesitas al menos 4 ocupantes";
        }
    }
    
}
?>
