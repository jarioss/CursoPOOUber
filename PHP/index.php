<?php
require_once("account.php");
require_once("car.php");
require_once("uberX.php");
require_once("uberPool.php");
require_once("uberVan.php");



$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();

$uberPool = new UberPool("JDJ654", new Account("Andrea Herrería", "ANDA987"), "Mazda", "2");
$uberPool->setPassenger(4);
$uberPool->printDataCar();


$uberVan = new UberVan("OJL123", new Account("Raúl", "1234456"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();

?>