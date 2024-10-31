<?php
/**
* Asociativní pole
* Deklarujte pole months, které bude mít v hodnotách uložen český název měsíce. Index bude odpovídat pořadovému číslu měsíce.
* a) Za pomocí cyklu zobrazte všechny měsíce.
* b) Za pomocí cyklu zobrazte všechny měsíce z období 6-12.
*/

//reseni


$months = array("leden", "unor", "brezen", "duben", "kveten", "cerven", "cervenec", "srpen", "zari", "rijen", "listopad", "prosinec");

foreach ($months as $value) {
    echo $value .'<br />';
}

echo '<br />';

for ($i = 6; $i <= 11; $i++) {
    echo $months[$i] . "\n";
}

echo '<br />';
?>




