<?php
function calculate($number1, $number2, $operator)
{
    switch ($operator) {
        case "+":
            $result = $number1 + $number2;
            break;
        case "-":
            $result = $number1 - $number2;
            break;
        case "*":
            $result = $number1 * $number2;
            break;
        case "/":
            $result = $number1 / $number2;
            break;
        default:
            return "Wrong operator!";
            break;
    }

    $number1 = $number1 < 0 ? "($number1)" : $number1;
    $number2 = $number2 < 0 ? "($number2)" : $number2;

    return "$number1 $operator $number2 = $result";
}

function validateForm($resultDataFile)
{
    if (isset($_REQUEST["number1"], $_REQUEST["number2"], $_REQUEST["operator"])) {
        $number1 = $_REQUEST["number1"];
        $number2 = $_REQUEST["number2"];
        $operator = $_REQUEST["operator"];

        if (is_numeric($number1) && is_numeric($number2)) {
            if (!($number2 == 0 && $operator == "/")) {
                $result = calculate($number1, $number2, $operator);

                $results = file_exists($resultDataFile) ? unserialize(file_get_contents($resultDataFile)) : [];
                $results[] = $result;

                // Speichere maximal die letzten drei Rechnungen
                if (count($results) > 3)
                    array_shift($results);

                file_put_contents($resultDataFile, serialize($results));

                return $result;
            } else
                return "Cannot divide by 0!";
        } else
            return "At least one entry is missing!";
    } else
        return "Something is missing! &#129300;";
}

$resultDataFile = "result.data.txt";
$resultData = [];

// Lösche oder lese die Summary
if (file_exists($resultDataFile)) {
    if (isset($_REQUEST["delsum"]))
        unlink($resultDataFile);
    else {
        $resultData = unserialize(file_get_contents($resultDataFile));
        $resultData = array_reverse($resultData);
    }
}
?>

<p class="text-center text-gray-700 text-xl">
    <?php
    if (isset($_REQUEST["submit"]))
        echo validateForm($resultDataFile);
    ?>
</p>

<p class="text-center text-gray-500 text-m mt-4">
    <?php
    if (count($resultData) > 0) {
        echo "Summary:<br>";

        foreach ($resultData as $rd)
            echo $rd . "<br>";
    }
    ?>
</p>