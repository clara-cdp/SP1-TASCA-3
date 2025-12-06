<?php
echo "<h3> * * *TASCA-3 * NIVELL 3 * Exercici 1 * * * <br></h3>" . PHP_EOL;

/*Donat un array d’enters, fes un programa que:
Retorni cada valor de l’array elevat al cub fent servir la funció array_map().*/

$Fibonacci = [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144];



function calcCube(int $number)
{
    return (int) ($number * $number * $number);
}

print_r(array_map("calcCube", $Fibonacci));


//https://www.w3schools.com/php/func_array_map.asp