<?php

/*
    Übung 14:
    Schreibe eine Funktion, die zwei numerische Werte entgegennimmt, diese multipliziert und das Ergebnis zurückgibt. 
    Beim Aufruf der Funktion mit den Werten 3 und 5 soll der Rückgabewert 15 sein.
*/

echo "Übung 14:\n";

function multiply(int|float $a, int|float $b): int|float
{
    $result = $a * $b;

    return $result;
}

echo multiply(3, 5);