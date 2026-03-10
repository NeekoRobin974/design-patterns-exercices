<?php
namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;
use Exception;

class VehiculeFactory{
    public static function createVehicule($typeVehicule, $costPerKm, $fuelType): Bicycle|Truck|Car{
        switch ($typeVehicule){
            case "Car" : return new Car($costPerKm, $fuelType);
            case "Truck" : return new Truck($costPerKm, $fuelType);
            case "Bicycle" : return new Bicycle($costPerKm, $fuelType);
            default : throw new Exception("Le type de véhicule n'existe pas");
        }
    }

    public static function createSelonFacteurs($distance, $poids): Bicycle|Truck|Car{
        if($distance < 20){
            return new Bicycle(0, "Votre propre force ;)");
        }elseif ($poids > 20 && $poids < 200){
            return new Car(1, "Essence");
        }elseif ($poids > 200){
            return new Truck(2, "Gazole");
        }else{
            return new Car(1, "Essence");
        }
    }
}