<?php
echo "<h3> * * *TASCA-3 * NIVELL 2 * Exercici 2 * * * <br></h3>\n";

/* Crea un programa que llisti les notes dels/les alumnes d’una classe. 
Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. 
Cada alumne tindrà 5 notes (valorades del 0 al 10).

A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant 
la mitjana de la nota de cada alumne, com 
la nota mitjana de la classe sencera.*/

$studentRoster = array(
    "John" => array(4, 5, 6, 4, 7),
    "Paul" => array(6, 7, 9, 7, 8),
    "George" => array(3, 4, 3, 5, 3),
    "Ringo" => array(4, 6, 7, 9, 8)
);

const ALL_GRADES = 5;

function calcAverageGrade(array $array)
{
    $ClassAverage = 0;

    foreach ($array as $student => $grade) {
        $totalSumofGrades = array_sum($grade);
        $studentAverage = $totalSumofGrades / ALL_GRADES;

        echo "The average grade of $student is $studentAverage." . PHP_EOL;

        $ClassAverage += $studentAverage;
    }

    echo "The class average is $ClassAverage .";
}

calcAverageGrade($studentRoster);
