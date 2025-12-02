<?php
echo "<h3> * * *TASCA-3 * NIVELL 2 * Exercici 1 * * * <br></h3>\n";
/*Imagina que tens dues llistes de convidats(representats/es únicament per noms). Fes un programa que et retorni:*/

$list1 = ["Arale", "Gatchan", "Akane", "Pisuke", "Taro", "Sembei"];
$list2 = ["Ranma", "Akane", "Xampu", "Ryoga", "Taro"];

#La llista de convidats en comú entre les dues llistes.
$commonGuests = array_intersect($list1, $list2);
echo "Convidats en comú: " . implode(", ", $commonGuests) . "\n";


#La mescla de la llista de convidats(sense repeticions).
$newList = array_merge($list1, $list2);
$newList = array_unique($newList);
$newList = array_values($newList);
echo "Convidats, sense repeticions: " . implode(", ", $newList) . "\n";


#La llista de convidats exclusius de la primera llista.
$exclusiveList1 = [];

foreach ($list1 as $guest) {
    if (!in_array($guest, $list2)) {
        $exclusiveList1[] = $guest;
    }
}

echo "Convidats exclusius de la llista-1: " . implode(", ", $exclusiveList1) . "\n";

#La llista de convidats exclusius de la segona llista.
$exclusiveList2 = [];

foreach ($list2 as $guest) {
    if (!in_array($guest, $list1)) {
        $exclusiveList2[] = $guest;
    }
}

echo "Convidats exclusious de la llista-2: " . implode(", ", $exclusiveList2);
