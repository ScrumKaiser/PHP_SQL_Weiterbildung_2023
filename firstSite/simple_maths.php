<!--
    Übung 6:
    Schreibe ein Skript, in dem du eine Variable $number mit dem Wert 5 deklarierst. 
    Führe anschließend die folgenden Berechnungen durch und speichere den Wert wieder in der Variable $number:

    3 addieren
    durch 2 teilen
    1 subtrahieren
    mit 7 multiplizieren
    Modulo 8 ausführen
    mit 2 potenzieren

    Gib das Ergebnis mit echo aus. Dieses sollte 25 sein.
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $number = 5;

            $number += 3;
            $number /= 2;
            $number -=1;
            $number *= 7;
            $number %= 8;
            $number **=2;

            echo $number;
        ?>
    </body>
</html>