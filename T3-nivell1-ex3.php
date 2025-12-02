<?php
echo "<h3> * * *TASCA-3 * NIVELL 1 * Exercici 3 * * * <br></h3>\n";

/*Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. 
La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.*/

$myArray = ["php", "html", "python",];
$myOtherArray = ["javascript", "css", "java", "Go",];
$myChar = "h";
$myotherchar = "a";

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
echo $result ? "Totes les paraules contenen el caràcter '$myChar'." : "No totes les paraules contenen el caràcter '$myChar'.";

echo "<br>\n";
$result2 = checkChar($myOtherArray, $myotherchar);
echo $result2 ? "Totes les paraules contenen el caràcter '$myotherchar'." : "No totes les paraules contenen el caràcter '$myotherchar'.";









//https://www.w3schools.com/php/php_ref_string.asp