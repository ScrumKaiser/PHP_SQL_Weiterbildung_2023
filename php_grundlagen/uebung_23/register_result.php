<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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