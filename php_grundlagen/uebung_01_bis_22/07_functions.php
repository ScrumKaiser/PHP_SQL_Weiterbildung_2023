<?php

/*
    Übung 7:
    Vertrauen ist gut, Kontrolle ist besser. 
    Als du die Vergleichsoperatoren für gleich und identisch kennengelernt hast, habe ich dir ein Codebeispiel geliefert. 
    Überprüfe mithilfe der Funktion gettype, welcher Datentyp für den jeweiligen Wert zurückgegeben wird.
*/

echo "Übung 7:\n";

//int and float
echo 5 === 5.0; // false
echo gettype(5.0) . "\n";

//int and int
echo 5 === 5; // true
echo gettype(5) . "\n";

//int and string
echo 5 === '5'; // false
echo gettype("5");

echo "\n\n";
