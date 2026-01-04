<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T3-N2-EX1</title>
</head>

<body>
    <h3> * * *TASCA-3 * NIVELL 2 * Exercici 1 * * * </h3>
    <p>Imagina que tens dues llistes de convidats(representats/es únicament per noms). Fes un programa que et retorni:</p>
    <ol>
        <li>La llista de convidats en comú entre les dues llistes.</li>
        <li>La mescla de la llista de convidats(sense repeticions).</li>
        <li>La llista de convidats exclusius de la primera llista.</li>
        <li>La llista de convidats exclusius de la segona llista.</li>
    </ol>

    <h4> Creació de llistes:</h4>

    <?php
    $list1 = ["Arale", "Gatchan", "Akane", "Pisuke", "Taro", "Sembei"];
    $list2 = ["Ranma", "Akane", "Xampu", "Ryoga", "Taro"];

    echo "<strong>Llistat 1:</strong> " . implode(", ", $list1) . "<br>";
    echo "<strong>Llistat 2:</strong> " . implode(", ", $list2); ?>

    <h4>1. La llista de convidats en comú entre les dues llistes.</h4>

    <?php $commonGuests = array_intersect($list1, $list2);
    echo "<em>New list after array_intersect:<br></em>";
    echo "indexed list:<br>";
    print_r($commonGuests); ?>

    <h4>2. La mescla de la llista de convidats (sense repeticions)</h4>
    <?php
    echo "<em>New list after array_merge:<br></em>";
    $newList = array_merge($list1, $list2);

    echo "indexed list: <br>";
    print_r($newList);

    echo "<br><br><em>New list after array_unique:</em><br>";
    $newList = array_unique($newList);

    echo "indexed list: <br>";
    echo print_r($newList);

    echo "<br><br>* Convidats, sense repeticions:";
    echo "<br><em>New list after array_values:</em><br>";
    $newList = array_values($newList);

    print_r($newList);

    ?>
    <h4>3. La llista de convidats exclusius de la primera llista.</h4>

    <?php
    $exclusiveList1 = [];

    foreach ($list1 as $guest) {
        if (!in_array($guest, $list2)) {
            $exclusiveList1[] = $guest;
        }
    }

    echo "* Convidats exclusius de la llista 1: <br>";
    echo "indexed list: <br>";
    print_r($exclusiveList1);
    ?>

    <h4>4. La llista de convidats exclusius de la segona llista.</h4>
    <?php

    $exclusiveList2 = [];

    foreach ($list2 as $guest) {
        if (!in_array($guest, $list1)) {
            $exclusiveList2[] = $guest;
        }
    }

    echo "<br>* Convidats exclusious de la llista 2: <br>";
    echo "indexed list: <br>";
    print_r($exclusiveList2);
    //----------------------------------------------------------------------------------------------
    ?>
    <hr>
    <h4> Creació de llistes:</h4>
    <?php

    $listA = ["Arale", "Gatchan", "Akane", "Pisuke", "Taro", "Sembei"];
    $listB = ["Ranma", "Akane", "Xampu", "Ryoga", "Taro"];

    echo "<strong>Llist A:</strong> " . implode(", ", $listA) . "<br>";
    echo "<strong>Llistat B:</strong> " . implode(", ", $listB); ?>

    <h4>1. La llista de convidats en comú entre les dues llistes.</h4>

    <?php
    echo "<em>New list after array_intersect:<br></em>";
    echo "indexed list: <br>";
    $commonG = array_intersect($listA, $listB);
    print_r($commonG); ?>

    <h4>2. La mescla de la llista de convidats (sense repeticions)</h4>

    <?php
    echo "<em>New list after array_unique(array_merge):<br></em>";
    echo "indexed list: <br>";
    $all = array_unique(array_merge($listA, $listB));
    print_r($all); ?>

    <h4>3. La llista de convidats exclusius de la primera llista.</h4>
    <?php
    echo "<em>New list after array_diff<br></em>";
    echo "indexed list: <br>";
    $listAexclusive = array_diff($listA, $listB);
    print_r($listA);
    ?>
    <h4>3. La llista de convidats exclusius de la primera llista.</h4>

    <?php
    echo "<em>New list after array_diff<br></em>";
    echo "indexed list: <br>";
    $listBexclusive = array_diff($listB, $listA);
    print_r($listB);
    ?>



</body>

</html>