<?php
echo "<h3> * * *TASCA-3 * NIVELL 1 * Exercici 2 * * * <br></h3>\n";
echo "<p> Fes un programa que tingui un array indexat de 6 elements i després:<br>
- Mostri per pantalla la mida de l’array anterior.<br>
- Elimini un element de l’array anterior. Comprova que els índexs/claus de l'array estiguin normalitzats.<br>
  ** (s’han de reorganitzar els seus índexs perquè no hi hagin salts entre índexs).<br>
- Mostri per última vegada la mida de l’array i el seu contingut. </p>";

echo "<h4>construction of the array: </h4>";
$reindeer = ["Prancer", "Dancer", "Comet", "Cupid", "Vixen", "Donner"];
print_r($reindeer);

echo "<h4>REINDEER: </h4>";

foreach ($reindeer as $r) {
    echo "Reindeer name: $r <br>";
}

echo "<h4>counting elements:</h4>";
echo "Total of elements in the array: " . count($reindeer);

//removing and indexing elements: 
array_splice($reindeer, 3, 1);

echo "<h4>Update array after removing one element: </h4>";
print_r($reindeer);

echo "<h4>REINDEER: </h4>";

foreach ($reindeer as $r) {
    echo "Reindeer name: $r <br>";
}

echo "<h4>counting elements:</h4>";
echo "<br> Total of elements in the array: " . count($reindeer);
