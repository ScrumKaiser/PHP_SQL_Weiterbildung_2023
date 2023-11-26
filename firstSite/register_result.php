<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--
        Übung 23:
        Schreibe eine PHP-Seite, die ein Formular beinhaltet. 
        In diesem Formular muss der Nutzer seinen Namen, sein Alter und seine E-Mail-Adresse in Inputfeldern definieren. 
        Weiterhin kann der Nutzer eine Beschreibung über sich in einem Textarea-Feld definieren. 
        Er kann weiterhin seine Lieblingsfarbe auswählen. Ob nur eine Farbe oder mehrere wählbar sind, überlasse ich dir. 
        Die Formulardaten sollen mittels POST an eine andere PHP-Seite gesendet werden, auf der die Daten ausgegeben werden.
    -->

    <?php
    echo "<a href='{$_SERVER["HTTP_REFERER"]}'>Zurück zum Formular</a>";

    echo "<br><br>";

    $name = htmlspecialchars($_POST["name"]);
    $alter = htmlspecialchars($_POST["alter"]);
    $email = htmlspecialchars($_POST["email"]);
    $beschreibung = htmlspecialchars($_POST["beschreibung"]);
    $farbe = htmlspecialchars($_POST["farbe"]);

    if ($name != "" && $alter != "" && $email != "") {
        echo "Name: $name" . "<br>";
        echo "Alter: $alter Jahre" . "<br>";
        echo "E-Mail: $email" . "<br>";
        echo "Beschreibung: $beschreibung" . "<br>";
        echo "Lieblingsfarbe: <span style='color: $farbe'>$farbe</span>";
    } else
        echo "Name, Alter und E-Mail sind Pflichtangaben!";
    ?>
</body>

</html>