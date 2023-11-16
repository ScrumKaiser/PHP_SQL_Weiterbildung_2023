<!--
    Übung 4:
    Schreibe ein Skript, das die verschiedenen Wochentage in eine einzelne Variable $wochentage schreibt. 
    Beginne mit $weekdays = 'Monday'; und erweitere die Variable in jeder Codezeile um den nächsten Tag. 
    Trenne die Wochentage durch ein Komma. Gib am Ende den Wert der Variablen $weekdays mit echo aus. 
    Dies sollte das Resultat sein: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday
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
            $weekdays = "Monday";
            $weekdays .= ", Tuesday";
            $weekdays .= ", Wednesday";
            $weekdays .= ", Thursday";
            $weekdays .= ", Friday";
            $weekdays .= ", Saturday";
            $weekdays .= ", Sunday";
            
            echo $weekdays;
        ?>
    </body>
</html>