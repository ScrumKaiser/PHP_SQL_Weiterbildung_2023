<?php

/*
    Übung 10:
    Versuche anhand der Funktionsbeschreibung auf http://php.net zu verstehen, welchen Zweck die Funktion htmlspecialchars() erfüllt. 
    Überlege dir eine praktische Anwendung für htmlspecialchars() in einer Webseite.
*/

echo "Übung 10:\n";

$htmlText = "Text mit Buchstaben & Sonderzeichen";
echo $htmlText . "\n";
echo htmlspecialchars($htmlText);

echo "\n\n";
