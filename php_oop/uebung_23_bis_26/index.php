<?php

declare(strict_types=1);

require_once("fussball.php");

// Fußball-Daten definieren
$fussbaelleDaten = [
    [
        "farbe" => "weiß",
        "durchmesser" => 22
    ],
    [
        "farbe" => "blau",
        "durchmesser" => 20
    ],
    [
        "farbe" => "orange",
        "durchmesser" => 22
    ]
];

// Fußbälle konstruieren
$fussbaelle = [];
foreach ($fussbaelleDaten as $fussballDaten)
    $fussbaelle[] = new Fussball($fussballDaten);

// Fußbälle ausgeben
foreach ($fussbaelle as $fussball)
    echo "$fussball\n";
