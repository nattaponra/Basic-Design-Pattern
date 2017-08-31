<?php
require_once 'AutomobileFactory.php';

    $veyron = AutomobileFactory::create('Bugatti', 'Veyron');
    $veyron->setVehicleMake("Toyota");
    print_r($veyron->getMakeAndModel());