<?php

declare(strict_types=1);

/*
    Übung 7:
    Vertrauen ist gut, Kontrolle ist besser. 
    Als du die Vergleichsoperatoren für gleich und identisch kennengelernt hast, habe ich dir ein Codebeispiel geliefert. 
    Überprüfe mithilfe der Funktion gettype, welcher Datentyp für den jeweiligen Wert zurückgegeben wird.
*/

echo "Übung 7:\n";

//int and float
echo 5 === 5.0; // false
echo gettype(5.0) . "\n";

//int and int
echo 5 === 5; // true
echo gettype(5) . "\n";

//int and string
echo 5 === '5'; // false
echo gettype("5");

echo "\n\n";

/*
    Übung 8:
    Finde heraus, welchen Datentyp die Funktion intval() zurückliefert.
    Finde ebenfalls heraus, welchen Datentyp der zweite Parameter von substr() haben muss.
*/

echo "Übung 8:\n";

echo intval(4.20) . "\n";
echo substr("Abgehackter Text", 3, 12);

echo "\n\n";

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

/*
    Übung 11:
    Schreibe eine Funktion showMyName(), die deinen Namen ausgibt. Rufe die Funktion auf.
*/

echo "Übung 11:\n";

function showMyName()
{
    echo "Oliver";
}

showMyName();

echo "\n\n";

/*
    Übung 12:
    Schreibe eine Funktion namens count(), die die Zahlen von 10 bis 0 rückwärts ausgibt.
    Rufe die Funktion auf und beobachte, was passiert. Spätestens beim Aufruf wird dir ein Fehler angezeigt. 
    Interpretiere die Fehlermeldung und behebe das Problem, sodass eine Funktion aufrufbar ist, welche die Zahlen ausgibt.
*/

echo "Übung 12:\n";

function countDooku()
{
    echo "10";
    echo "9";
    echo "8";
    echo "7";
    echo "6";
    echo "5";
    echo "4";
    echo "3";
    echo "2";
    echo "1";
    echo "0";
}

countDooku();

echo "\n\n";

/*
    Übung 13:
    Überprüfe, wie viele Parameter die Funktion explode() hat. 
    Wie viele davon sind optionale Parameter?
*/

echo "Übung 13:\n";

// Die Funktion hat 3 Parameter von denen einer optional ist
var_dump(explode("-", "drei-hundert-zwanzig", 2));

echo "\n\n";

/*
    Übung 14:
    Schreibe eine Funktion, die zwei numerische Werte entgegennimmt, diese multipliziert und das Ergebnis zurückgibt. 
    Beim Aufruf der Funktion mit den Werten 3 und 5 soll der Rückgabewert 15 sein.
*/

echo "Übung 14:\n";

function multiply(int|float $a, int|float $b): int|float
{
    $result = $a * $b;

    return $result;
}

echo multiply(3, 5);