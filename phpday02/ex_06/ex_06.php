<?php
    function  my_create_continent($continentNameToAdd, &$worldMap) {        
        $worldMap[$continentNameToAdd] = [];
    }

    function my_create_country($countryNameToAdd, $continentName, &$worldMap) {
        $worldMap[$continentName][$countryNameToAdd] = [];
    }

   function my_create_city($cityNameToAdd, $postalCodeOfCityToAdd, $countryName, $continentName, &$worldMap) {
       $worldMap[$continentName][$countryName][$cityNameToAdd] = $postalCodeOfCityToAdd;
   }

   function my_get_countries_of_continent($continentName, $worldMap) {
       if (array_key_exists($continentName, $worldMap))
           return $worldMap[$continentName];
       else {
           echo "Failure to get continent.\n";
           return NULL;
    }
}
   function my_get_cities_of_country($countryName, $continentName, $worldMap) {
       if (array_key_exists($countryName, $worldMap[$continentName]))
           return ($worldMap[$continentName][$countryName]);
       else {
           echo	"Failure to get country.\n";
           return NULL;
   }
 }

   function my_get_city_postal_code($cityName, $countryName, $continentName, $worldMap) {
       if (array_key_exists($cityName, $worldMap[$continentName][$countryName]))
           return ($worldMap[$continentName][$countryName][$cityName]);
       else{
           echo "Failure to get city.\n";
           return (NULL);
 }
}
