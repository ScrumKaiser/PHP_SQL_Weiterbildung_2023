<!--
    Übung 22:
    
    Probiere das Verhalten von $_REQUEST doch einfach mal aus, indem du zwei Formulare auf eine Seite packst 
    — jeweils eins mit GET und eins mit POST. 
    Weiterhin lässt du dir mit var_dump $_GET, $_POST und $_REQUEST ausgeben. 
    Nun sende die beiden Formulare ab und beobachte das Resultat.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET">
        <input type="text" name="name" placeholder="Name">
        <input type="submit" value="GET">
    </form>

    <form method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="submit" value="POST">
    </form>

    <?php
    echo print_r($_GET);
    echo print_r($_POST);
    echo print_r($_REQUEST);
    ?>
</body>

</html>