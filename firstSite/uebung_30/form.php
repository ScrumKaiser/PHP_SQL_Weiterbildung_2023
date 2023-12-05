<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>

<body>
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