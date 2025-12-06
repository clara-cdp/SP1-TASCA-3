<?php
echo "<h3> * * *TASCA-3 * NIVELL 3 * Exercici 2 * * * <br></h3>" . PHP_EOL;

/*Donat un array d’enters, fes un programa que ens retorni la suma dels enters 
de l’array que siguin primers fent servir la funció array_reduce().*/

$myNumbers = array(1, 2, 3, 5, 7, 11, 13, 17);
$isPrime = true;

function isPrime($n): bool
{
    $i = 2;
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}


function addPrimes($suma, $currentN): int
{
    if (isPrime($currentN)) {
        return $suma + $currentN;
    }
    return $suma;
}


$sumOfPrimes = array_reduce($myNumbers, 'addPrimes', 0);

echo "The sum of prime numbers in the array is: " . $sumOfPrimes;
