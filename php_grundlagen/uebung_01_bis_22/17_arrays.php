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
