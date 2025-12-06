<?php
echo "<h3> * * *TASCA-3 * NIVELL 3 * Exercici 2 * * * <br></h3>" . PHP_EOL;


/*Donat un array d’strings, fes un programa que:
Retorni un array on només estiguin els strings que tinguin un nom parell de caràcters usant la funció array_filter().*/

$myStringArray = ["Grumpy", "Dopey", "Doc", "Bashful", "Happy", "Sneezy",];

function checkifEven($string)
{
    return strlen($string) % 2 === 0;
}

$newEvenLetterArray = array_filter($myStringArray, "checkifEven");

echo implode(", ", $newEvenLetterArray) . PHP_EOL;
