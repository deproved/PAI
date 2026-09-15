<?php
    // Zadanie 1
    $number = 43;
    if ($number % 2 == 0) echo "parzysta";
    else echo "nieparzysta";

    //Zadanie 2
    $liczbajeden = 50;
    $liczbadwa = 10;
    if ($liczbajeden % $liczbadwa == 0) echo "podzielna";
    else echo "nie podzielna";

    //Zadanie 3
    $liczbaprzedzial = 11;
    if ( ($liczbaprzedzial > 0 && $liczbaprzedzial < 11) || $liczbaprzedzial > 16 && $liczbaprzedzial < 22) echo "liczba należy do przedziału";
    else echo "liczba nie należy do przedziału";

    //Zadanie 4 
    $liczb = 1;
    if ($liczb > 0) echo "większa od 0";
    else if ($liczb < 0) echo "mniejsza od 0";
    else echo "równa się 0";

    //Zadanie 5
    $wiek = 14;
    if($wiek < 11) echo "dziecko";
    else if ($wiek < 17) echo "nastolatek";
    else echo "dorosły";
?>