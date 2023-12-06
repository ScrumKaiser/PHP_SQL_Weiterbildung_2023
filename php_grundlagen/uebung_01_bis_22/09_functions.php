<?php

/*
    Übung 9:
    Versuche anhand der Funktionsbeschreibung auf http://php.net zu verstehen, welchen Zweck die Funktion trim() erfüllt. 
    Denke dir eine praktische Anwendung aus, wo du trim() in einer Webseite einsetzen könntest.
*/

echo "Übung 9:\n";

$email = "  example@mail.com   ";
echo $email . "\n";
echo trim($email, " ");

echo "\n\n";
