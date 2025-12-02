<?php
echo "<h3> * * *TASCA-3 * NIVELL 1 * Exercici 3 * * * <br></h3>\n";

/*Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. 
La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.*/

$myArray = ["php", "html", "python",];
$myOtherArray = ["javascript", "css", "java", "Go",];
$myChar = "h";
$myOtherChar = "a";

function checkChar($arrayWords, $character)
{
    foreach ($arrayWords as $word) {
        if (strpos($word, $character) === false) {
            return false;
        }
    }
    return true;
}

$result = checkChar($myArray, $myChar);
echo $result ? "All the words in the array contain $myChar." : "Not all the word conatain $myChar";

echo PHP_EOL;
$result2 = checkChar($myOtherArray, $myOtherChar);
echo $result2 ? "All the words in the array contain $myOtherChar." : "Not all the word conatain $myOtherChar";









//https://www.w3schools.com/php/php_ref_string.asp