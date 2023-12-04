<?php
$db = new PDO(
    "mysql:host=localhost;dbname=filmverleih",
    "root",
    "",
    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);

$statement = $db->query("SELECT filme.titel, filme.spieldauer, filme.erscheinungsjahr, filme.kurzbeschreibung, filme.genre, personen.name AS regisseur
FROM filme
JOIN personen
ON filme.regisseur_id = personen.id;");

$filme = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmverleih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <table class="table table-striped">
        <?php
        echo "<thead>";
        echo "<tr>";

        foreach ($filme[0] as $attribut => $wert) {
            echo "<th>" . ucfirst($attribut) . "</th>";
        }

        echo "</tr>";
        echo "</thead>";

        echo "<tbody>";

        foreach ($filme as $film) {
            echo "<tr>";

            foreach ($film as $wert) {
                echo "<td>$wert</td>";
            }

            echo "</tr>";
        }

        echo "</tbody>";
        ?>
    </table>
</body>

</html>