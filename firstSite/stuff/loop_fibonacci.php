<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>

<body>
    <!--
        Übung 26:
        Schreibe eine Schleife, die die Fibonacci Folge ausgibt. 
        Es soll möglich sein, festzulegen, wie viele Fibonacci Zahlen errechnet werden sollen.
    -->

    <form>
        <input type="number" name="nMax" placeholder="n">
        <input type="submit" value="Fibonacci">
    </form>
    
    <?php
    function Fibonacci($n)
    {
        // f(1) = f(2) = 1
        if ($n == 1 || $n == 2)
            return 1;
        // f(n) = f(n-1) + f(n-2)
        else
            return Fibonacci($n - 1) + Fibonacci($n - 2);
    }

    if (isset($_GET["nMax"])) {
        $nMax = htmlspecialchars((int)$_GET["nMax"]);

        if ($nMax > 0) {
            echo "f($nMax) = ";

            for ($n = 1; $n <= $nMax; $n++)
                echo Fibonacci($n) . " ";
        } else
            echo "Die Zahl muss größer als 0 sein!";
    }
    ?>
</body>

</html>