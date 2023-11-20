<?php
/*
    Übung 15:
    Schreibe eine Funktion, die einen Integer Wert entgegennimmt und prüft, ob dieser gerade oder ungerade ist. 
    Gib einen String mit gerade oder ungerade zurück, je nachdem welche Bedingung erfüllt ist.
*/

function isIntegerEvenOrOdd(int $number): string
{
    return $number % 2 == 0 ? "gerade" : "ungerade";
}

echo "Die 13 ist " . isIntegerEvenOrOdd(13) . "\n";
echo "Die 20 ist " . isIntegerEvenOrOdd(20);

echo "\n\n";

/*
    Übung 16:
    Schreibe eine Funktion, die zwei numerische Werte sowie einen String entgegennimmt. 
    Wenn der String den Wert eines der folgenden mathematischen Operatoren (Addition, Subtraktion, Multiplikation oder Division) hat, 
    soll die entsprechende mathematische Operation ausgeführt werden. Gib das Ergebnis zurück. Du kannst es dir gerne auch ausgeben lassen.
*/

function calculate(int|float $number1, int|float $number2, string $operator): int|float
{
    $result = match ($operator) {
        "+" => $number1 + $number2,
        "-" => $number1 - $number2,
        "*" => $number1 * $number2,
        "/" => $number1 / $number2,
        default => 0
    };

    return $result;
}

echo "Addition:\t3 + 2 = " . calculate(3, 2, "+") . "\n";
echo "Subtraktion:\t3 - 2 = " . calculate(3, 2, "-") . "\n";
echo "Multiplikation:\t3 * 2 = " . calculate(3, 2, "*") . "\n";
echo "Division:\t3 / 2 = " . calculate(3, 2, "/") . "\n";