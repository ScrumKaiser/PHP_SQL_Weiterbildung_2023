<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>

<body>
    <!--
        Übung 30:
        Schreibe ein PHP-Skript, welches vier Formularfelder enthält. 
        In das erste Textfeld kann der Benutzer seinen Geburtstag, 
        in das zweite den Monat und in das dritte das Jahr eingeben. 
        Im vierten Feld kann der Nutzer in eine Textarea einen Text schreiben. 
        Nach Absenden des Formulars soll der Geburtstag als Timestamp angezeigt werden. 
        Der Text soll in einem p-Tag ausgegeben werden. 
        Achte darauf, dass vom Nutzer angegebene Leerzeilen erhalten bleiben sollen. 
        Hier bietet sich die Funktion nl2br an. 
        Dass die Ausgabe maskiert wird, ist selbstverständlich klar.
        Weiterhin soll dem Nutzer angezeigt werden, wie alt er gerade in Jahren ist. 
        Dieses Alter kannst du errechnen, indem du vom aktuellen Timestamp den Timestamp des Geburtstages abziehst 
        und das Resultat in Jahre umrechnest.
    -->

    <form method="POST">
        <input type="number" name="day" placeholder="Day">
        <br>
        <input type="number" name="month" placeholder="Month">
        <br>
        <input type="number" name="year" placeholder="Year">
        <br>
        <textarea name="text" placeholder="Text"></textarea>
        <br>
        <button type="submit" name="submit">
            Send
        </button>
    </form>
    <br>
    <?php
    require_once "form.tpl.php";
    ?>
</body>

</html>