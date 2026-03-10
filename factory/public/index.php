<?php
require('../vendor/autoload.php');

# Essayer d'utiliser votre factory ici
use App\Factory\VehiculeFactory;

try {
    //Factory classique
    $car = VehiculeFactory::createVehicule("Car", 1, "Essence");
    echo "Coût par km voiture = " . $car->getCostPerKm() . "€, type carburant = " . $car->getFuelType() . "<br>";
    $velo = VehiculeFactory::createVehicule("Bicycle", 0, "Moi");
    echo "Coût par km vélo = " . $velo->getCostPerKm() . "€, type carburant = " . $velo->getFuelType() . "<br>";
    $camion = VehiculeFactory::createVehicule("Truck", 2, "Gazole");
    echo "Coût par km camion = " . $camion->getCostPerKm() . "€, type carburant = " . $camion->getFuelType() . "<br>";

    //Factory selon facteurs
    $vehicule1 = VehiculeFactory::createSelonFacteurs(10, 5);
    echo "Retourne un vélo, coût par km véhicule 1 = " . $vehicule1->getCostPerKm() . "€, type carburant = " . $vehicule1->getFuelType() . "<br>";
    $vehicule2 = VehiculeFactory::createSelonFacteurs(30, 5);
    echo "Retourne une voiture, coût par km véhicule 2 = " . $vehicule2->getCostPerKm() . "€, type carburant = " . $vehicule2->getFuelType() . "<br>";
    $vehicule3 = VehiculeFactory::createSelonFacteurs(30, 300);
    echo "Retourne un camion, coût par km véhicule 3 = " . $vehicule3->getCostPerKm() . "€, type carburant = " . $vehicule3->getFuelType() . "<br>";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}