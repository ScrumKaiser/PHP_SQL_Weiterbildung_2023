<!--
    Übung 3:
    Probier doch mal aus, was $foobar zurückliefert, wenn du den Wert von $foo auf den String "baz" änderst.
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
            $foo = "bar";
            $foobar = $foo;
            
            echo $foo;
            echo "\n";
            echo $foobar;
            echo "\n";
            
            $foo = "baz";
            
            echo $foo;
            echo "\n";
            echo $foobar;
        ?>
    </body>
</html>