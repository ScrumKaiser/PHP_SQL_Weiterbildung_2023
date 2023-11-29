<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Dooku</title>
</head>

<body>
    <!--
        Übung 25:
        Schreibe eine Schleife, die die Zahlen 0 bis 99 ausgibt. 
        Hierbei ist wichtig, dass immer zwei Zähler verwendet werden. 
        Die Zahl 1 wird also durch 0 1 repräsentiert.
    -->

    <?php
    for ($i = 0; $i < 10; $i++) {
        for ($ii = 0; $ii < 10; $ii++)
            echo "$i $ii<br>";
    }
    ?>
</body>

</html>