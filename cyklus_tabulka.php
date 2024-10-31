<?php
/*
 * cyklus
 * 1. Vytvořte tabulku, která bude obsahovat tři sloupce a n řádků. Obsah tabulky bude tvořen obsahem pole $city. Obsah každé buňky bude ve tvaru Pořadové číslo. Stát - Hlavní město
 * Příklad výstupu:
 * | Stát - hlavní město | Stát - hlavní město 		| Stát - hlavní město  |
 * |1. Italy - Rome 	 |2. Luxembourg - Luxembourg    |3. Belgium - Brussels |
 *
 * 2. Tabulku setřiďte vzestupně dle názvu státu (A-Z)
 *
 */

$city = array(
	"Italy"=>"Rome",
	"Luxembourg"=>"Luxembourg",
	"Belgium"=> "Brussels",
	"Denmark"=>"Copenhagen",
	"Finland"=>"Helsinki",
	"France" => "Paris",
	"Slovakia"=>"Bratislava",
	"Slovenia"=>"Ljubljana",
	"Germany" => "Berlin",
	"Greece" => "Athens",
	"Ireland"=>"Dublin",
	"Netherlands"=>"Amsterdam",
	"Portugal"=>"Lisbon",
	"Spain"=>"Madrid",
	"Sweden"=>"Stockholm",
	"United Kingdom"=>"London",
	"Cyprus"=>"Nicosia",
	"Lithuania"=>"Vilnius",
	"Czech Republic"=>"Prague",
	"Estonia"=>"Tallin",
	"Hungary"=>"Budapest",
	"Latvia"=>"Riga",
	"Malta"=>"Valetta",
	"Austria" => "Vienna",
	"Poland"=>"Warsaw"
);


ksort($city);

$rowCount = 0;
$cellCount = 1;

echo "<table border='1'>";
echo "<tr>"; 

foreach ($city as $country => $capital) {
    echo "<td>{$cellCount}. {$country} - {$capital}</td>"; 
    $cellCount++;
    $rowCount++;

   
    if ($rowCount % 3 == 0) {
        echo "</tr><tr>"; 
    }
}

if ($rowCount % 3 != 0) {
    while ($rowCount % 3 != 0) {
        echo "<td></td>"; 
        $rowCount++;
    }
    echo "</tr>"; 
}


echo "</table>";
?>
