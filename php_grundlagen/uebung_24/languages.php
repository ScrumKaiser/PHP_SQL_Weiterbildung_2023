<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Languages</title>
</head>

<body>
    <?php
    $languages = ["PHP", "Javascript", "Ruby", "Python"];

    echo "foreach:<br>";
    echo "<ul>";

    foreach ($languages as $language)
        echo "<li>$language</li>";

    echo "</ul>";

    echo "for:<br>";
    echo "<ul>";

    for ($i = 0; $i < count($languages); $i++)
        echo "<li>$languages[$i]</li>";

    echo "</ul>";

    echo "while:<br>";
    echo "<ul>";

    $i = 0;

    while ($i < count($languages)) {
        echo "<li>$languages[$i]</li>";

        $i++;
    }

    echo "</ul>";
    ?>
</body>

</html>