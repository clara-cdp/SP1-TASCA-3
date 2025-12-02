<?php
echo "<h3> * * *TASCA-3 * NIVELL 1 * Exercici 2 * * * <br></h3>\n";
# Fes un programa que tingui un array indexat de 6 elements i després:
//Mostri per pantalla la mida de l’array anterior.
//Elimini un element de l’array anterior. Comprova que els índexs/claus de l'array estiguin normalitzats.
// -> (s’han de reorganitzar els seus índexs perquè no hi hagin salts entre índexs).
//Mostri per última vegada la mida de l’array i el seu contingut. 

$reindeer = ["Prancer", "Dancer", "Comet", "Cupid", "Vixen", "Donner"];
print_r($reindeer);

echo "** Total of elements in the array: " . count($reindeer);
echo PHP_EOL;

array_splice($reindeer, 1, 1);

print_r($reindeer);
echo "** Total of elements in the array: " . count($reindeer);
