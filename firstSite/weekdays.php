<?php
/*
    Übung 4:
    Schreibe ein Skript, das die verschiedenen Wochentage in eine einzelne Variable $wochentage schreibt. 
    Beginne mit $weekdays = 'Monday'; und erweitere die Variable in jeder Codezeile um den nächsten Tag. 
    Trenne die Wochentage durch ein Komma. Gib am Ende den Wert der Variablen $weekdays mit echo aus. 
    Dies sollte das Resultat sein: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday
*/

$weekdays = "Monday";
$weekdays .= ", Tuesday";
$weekdays .= ", Wednesday";
$weekdays .= ", Thursday";
$weekdays .= ", Friday";
$weekdays .= ", Saturday";
$weekdays .= ", Sunday";

echo $weekdays;