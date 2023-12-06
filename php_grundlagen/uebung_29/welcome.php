<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
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