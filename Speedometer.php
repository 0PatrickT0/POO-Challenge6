<?php

// Speedometer.php
class Speedometer {

// Constantes

    public const CONVERT_KM_MILES = 0.621;
    public const CONVERT_MILES_KM = 1.621;

// Méthodes

public static function convertKmToMiles(int $speed): ?string {
    return $speed * self::CONVERT_KM_MILES;
}

public static function convertMilesToKm(int $speed): ?string {
    return $speed * self::CONVERT_MILES_KM;
}

}



