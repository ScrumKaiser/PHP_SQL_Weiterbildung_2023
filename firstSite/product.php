<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--
        Übung 21:
        Du als Programmierer kannst jetzt eine Seite product.php erstellen. 
        In dieser soll mittels $_GET die jeweilige articleId ermittelt und der entsprechende Artikel angezeigt werden. 
        Wichtig dabei ist, dass du nicht für jeden Artikel eine separate Seite baust, sondern eine Seite erstellst, 
        die in der Lage ist, jeden beliebigen Artikel anzuzeigen. Um dir die Arbeit zu erleichtern, schlage ich vor, 
        die Artikel in einem verschachtelten Array zu speichern, um aus einer Schleife die entsprechenden Werte zu erhalten.
    -->

    <h1>Product Overview</h1>
    <p>Here you can see all the products we offer.</p>
    <ul>
        <li>
            <a href="product.php?articleId=101">Cooking Pot</a>
        </li>
        <li>
            <a href="product.php?articleId=102">Salt Shaker</a>
        </li>
        <li>
            <a href="product.php?articleId=103">Slippers Size M</a>
        </li>
        <li>
            <a href="product.php?articleId=104">Cat Food</a>
        </li>
        <li>
            <a href="product.php?articleId=105">Allgäuer Bergkäse</a>
        </li>
    </ul>

    <?php
    $products = [
        101 => [
            "name" => "Cooking Pot",
            "description" => "Nen Pott zum kochen."
        ],
        102 => [
            "name" => "Salt Shaker",
            "description" => "Ein Salz-Schüttler."
        ],
        103 => [
            "name" => "Slippers Size M",
            "description" => "Schlüpper in Größe M."
        ],
        104 => [
            "name" => "Cat Food",
            "description" => "Futter für Aliens."
        ],
        105 => [
            "name" => "Allgäuer Bergkäse",
            "description" => "Der einzige deutsche Begriff hier."
        ]
    ];

    if (isset($_GET["articleId"])) {
        echo "<hr>";

        if (isset($products[$_GET["articleId"]])) {
            $product = $products[$_GET["articleId"]];
            
            echo "<h1>{$product['name']}</h1>";
            echo "<br>";
            echo $product["description"];
        } else
            echo "Es gibt keinen Artikel mit dieser Artikelnummer!";
    }
    ?>
</body>

</html>