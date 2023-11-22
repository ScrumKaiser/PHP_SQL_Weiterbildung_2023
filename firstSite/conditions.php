<?php

declare(strict_types=1);

/*
    Übung 15:
    Schreibe eine Funktion, die einen Integer Wert entgegennimmt und prüft, ob dieser gerade oder ungerade ist. 
    Gib einen String mit gerade oder ungerade zurück, je nachdem welche Bedingung erfüllt ist.
*/

function checkIfEvenOrOdd(int $number): string
{
    return $number % 2 == 0 ? "gerade" : "ungerade";
}

echo "13 ist " . checkIfEvenOrOdd(13) . "\n";
echo "20 ist " . checkIfEvenOrOdd(20);

echo "\n\n";

/*
    Übung 16:
    Schreibe eine Funktion, die zwei numerische Werte sowie einen String entgegennimmt. 
    Wenn der String den Wert eines der folgenden mathematischen Operatoren (Addition, Subtraktion, Multiplikation oder Division) hat, 
    soll die entsprechende mathematische Operation ausgeführt werden. Gib das Ergebnis zurück. Du kannst es dir gerne auch ausgeben lassen.
*/

function getCalculationResult(int|float $number1, int|float $number2, string $operator): int|float|string
{
    if ($number2 == 0 && $operator == "/")
        return "Man kann nicht durch 0 teilen";

    return match ($operator) {
        "+" => $number1 + $number2,
        "-" => $number1 - $number2,
        "*" => $number1 * $number2,
        "/" => $number1 / $number2,
        default => "Unerlaubter Operator '$operator'"
    };
}

$number1 = 3;
$number2 = 2;

$operator = "+";
echo "$number1 $operator $number2 = " . getCalculationResult($number1, $number2, $operator) . "\n";

$operator = "-";
echo "$number1 $operator $number2 = " . getCalculationResult($number1, $number2, $operator) . "\n";

$operator = "*";
echo "$number1 $operator $number2 = " . getCalculationResult($number1, $number2, $operator) . "\n";

$operator = "/";
echo "$number1 $operator $number2 = " . getCalculationResult($number1, $number2, $operator) . "\n";

$operator = ":";
echo "$number1 $operator $number2 = " . getCalculationResult($number1, $number2, $operator) . "\n";

$operator = "/";
$number2 = 0;
echo "$number1 $operator $number2 = " . getCalculationResult($number1, $number2, $operator);