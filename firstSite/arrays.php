<?php

/*
    Übung 17:
    Erweitere das Array $visitors aus dem Codebeispiel um eine weitere Dimension. 
    Jeder Besucher der Veranstaltung soll einen Schlüssel visited haben, in dem ein Array der bisher besuchten Veranstaltungen hinterlegt ist. 
    Greife dann auf eine dieser Veranstaltungen zu und gebe diese aus.
*/

$visitors = [
    [
        "name" => "Niclas",
        "age" => "21",
        "city" => "Berlin",
        "organizer" => true,
        "visited" => ["Die einzige Veranstaltung", "Irgendeine Veranstaltung"]
    ],
    [
        "name" => "Jonas",
        "age" => "21",
        "city" => "Cologne",
        "visited" => ["Eine weitere Veranstaltung", "Die letzte Veranstaltung"]
    ],
    [
        "name" => "Vasil",
        "age" => "32",
        "city" => "Munich",
        "visited" => ["Nix Veranstaltung"]
    ],
];

echo $visitors[0]["visited"][0];

echo "\n\n";

/*
    Übung 18:
    Gegeben sei das nachfolgende Array:
    $languages = ['Java', 'Perl', 'Ruby', 'Python', 'PHP', 'JavaScript'];

    Schreibe ein PHP-Skript, das den Satz ausgibt:
    Meine liebste Programmiersprache ist xxxx !
    Den Namen deiner Lieblingssprache soll sich das Skript aus dem Array $languages holen. Suche dir deine liebste Programmiersprache aus.
*/

$languages = ["Java", "Perl", "Ruby", "Python", "PHP", "JavaScript", "C#"];

echo "Meine liebste Programmiersprache ist $languages[6]!";

echo "\n\n";

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