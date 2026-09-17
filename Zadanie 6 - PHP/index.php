<?php
    // $tablica = [1, 2, 3, 4, 5];

    // // unset($tablica[1]);
    
    // for($i = 0; $i < count($tablica); $i++) $tablica[$i] = 0;
    // var_dump($tablica);

    // echo "<h1>Tablice dwuwymiarowe:</h1> <br>";
    
    // $tablica2d = [
    //     [1, 2, 3],
    //     [4, 5, 6], 
    //     [7, 8, 9]
    // ];

    // for($i = 0; $i < count($tablica2d); $i++){
    //     for($j = 0; $j < count($tablica2d[$i]); $j++) { echo $tablica2d[$i][$j] . " "; }
    //     echo "<br>";
    // } 
    // echo "<br>";

    // $osoby = [
    //     ["imie" => "Jan", "wiek" => 20],
    //     ["imie" => "Anna", "wiek" => 25],
    //     ["imie" => "Piotr", "wiek" => 30]
    // ];

    // foreach ($osoby as $wiersz) {
    //     foreach ($wiersz as $element) {
    //         echo $element . " ";
    //     }
    //     echo "<br>";
    // }

    $liczby = [
        [1, 2, 3, 4],
        [5, 6, 7, 8],
        [9, 10, 11, 12],
        [13, 14, 15, 16],
    ];

    function printArray($liczby){
        for ($i = 0; $i < count($liczby); $i++){
        for ($j = 0; $j < count($liczby[$i]); $j++){
            if($i == $j) $liczby[$i][$j] = 0;
            echo $liczby[$i][$j] . " ";
        }
        echo "<br>";
    }
    }

    $wynik = [];

    for ($i = 0; $i < count($liczby); $i++){
        $suma = 0;
        for ($j = 0; $j < count($liczby[$i]); $j++){
            $suma += $liczby[$j][$i];
        }
        $wynik[$i] = $suma; 
    }

    var_dump($wynik)
?>