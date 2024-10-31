<?php

/*
 * Pole - auta
 * Zjistěte kolik aut máte na skladě a počet prodaných kusů
 */

$cars = array (
	
	array("Volvo",22,18),
	array("BMW",15,13),
	array("Skoda",1203,763),
	array("Hundai",2143,329),
	array("Audi",22,8),
	array("Porsche",4,1),
	array("Saab",5,2),
	array("Land Rover",17,15)
);


$total_sold = 0;
$total_stock = 0;


foreach ($cars as $car) {
	$total_sold += $car[1];    
	$total_stock += $car[2];   
}


echo "Total cars sold: $total_sold\n";
echo "Total cars in stock: $total_stock\n";

?>