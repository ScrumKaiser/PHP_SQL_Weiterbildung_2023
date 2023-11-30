<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <!--
        Übung 29:
        Programmiere eine PHP-Seite, die ein Formular enthält. 
        In diesem kann der Nutzer seinen Namen eintragen. 
        Der Name soll in der Session gespeichert werden. 
        Ist der Name in der Session gespeichert, 
        soll beim Neuladen der Seite kein Formular angezeigt werden, 
        sondern der Name sowie ein Button zum Leeren der Session. 
        Klickt der Nutzer auf den Button, wird der Wert aus der Session gelöscht 
        und der Nutzer auf die Seite https://www.helloworld.org/ weitergeleitet.
    -->

    <?php
    session_start();

    $name = $_SESSION["name"] ?? "";

    if (!empty($name)) {
    ?>
        <p><?= "Welcome $name!"; ?></p>
        <form action="process_session.php" method="POST">
            <input type="submit" name="process" value="logout">
        </form>
    <?php
    } else {
    ?>
        <form action="process_session.php" method="POST">
            <input type="text" name="name" placeholder="Your Name">
            <input type="submit" name="process" value="login">
        </form>
    <?php
    }
    ?>
</body>

</html>