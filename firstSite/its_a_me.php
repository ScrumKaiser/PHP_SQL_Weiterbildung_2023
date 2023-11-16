<!--
    Übung 5:
    Schreibe ein Skript, in dem du in einer Variablen deinen Namen ablegst und dein Alter. 
    Gib dann den Text Mein Name ist NAME und ich bin ALTER Jahre alt. aus. 
    Ersetze NAME und ALTER mit den in den Variablen hinterlegten Werten. 
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
            $name = "Oliver";
            $alter = 27;

            echo "Mein Name ist $name und ich bin $alter Jahre alt.";
        ?>
    </body>
</html>