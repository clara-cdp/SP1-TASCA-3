<?php
echo "<h3> * * *TASCA-3 * NIVELL 1 * Exercici 3 * * *</h3>

<P>Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. 
La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.</P>";

$myArray = ["php", "html", "python",];
$myOtherArray = ["javaScript", "css", "java", "Go",];
$myChar = "h";
$myOtherChar = "a";

function checkChar($arrayWords, $character): bool
{
    foreach ($arrayWords as $word) {
        if (strpos($word, $character) === false) {
            return false;
        }
    }
    return true;
}

$result = checkChar($myArray, $myChar);
echo $result ? "The words: " . implode(", ", $myArray) . ", contain $myChar." : "Not all the word conatain $myChar";

echo "<br>";
$result2 = checkChar($myOtherArray, $myOtherChar);
echo $result2 ? "The words in the " . implode(", ", $myOtherArray) . "contain $myOtherChar." : "Not all the word conatain $myOtherChar";









//https://www.w3schools.com/php/php_ref_string.asp