<?php

/*
    Übung 19:
    Ich habe dir bereits die Funktionen vorgestellt, mit denen du am Anfang oder Ende eines bestehenden Arrays neue Werte hinzufügen kannst. 
    Bewerkstellige anhand des nachfolgenden Arrays, dem Key 4 den Wert 5 zu geben. 
    Füge weiterhin nach Key 4 den Wert 6 ein. 
    Für das Einfügen wird ein Blick in die Dokumentation nötig sein.
*/

$numbers = [1, 2, 3, 4, 4, 7, 8, 9];

$numbers[4] = 5;

array_splice($numbers, 5, 0, 6); // array_splice(array &$array, int $offset, ?int $length = null, mixed $replacement = []): array

print_r($numbers);
