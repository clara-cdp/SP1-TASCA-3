<?php
echo "<h3> * * *TASCA-3 * NIVELL 1 * Exercici 1 * * * <br></h3>\n";

echo "<p>Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.</p>";

echo "<h2>solution 1 </h2>";

$movieTitles = array(300, 1984, 9, 1917, 2046, 12, 28);

echo "NUMBERS IN ARRAY: " . implode(", ", $movieTitles);

echo "<h2>solution 2 </h2>";

foreach ($movieTitles as $m) {
    echo "$m <br>";
}
