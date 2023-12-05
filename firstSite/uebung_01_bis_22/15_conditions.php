<?php

/*
    Übung 15:
    Schreibe eine Funktion, die einen Integer Wert entgegennimmt und prüft, ob dieser gerade oder ungerade ist. 
    Gib einen String mit gerade oder ungerade zurück, je nachdem welche Bedingung erfüllt ist.
*/

declare(strict_types=1);

function checkIfEvenOrOdd(int $number): string
{
    return $number % 2 == 0 ? "gerade" : "ungerade";
}

echo "13 ist " . checkIfEvenOrOdd(13) . "\n";
echo "20 ist " . checkIfEvenOrOdd(20);

echo "\n\n";
