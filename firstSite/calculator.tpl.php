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
            return "Fehlerhafter Operator!";
            break;
    }

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

                file_put_contents($resultDataFile, $result);

                return "Result: $result";
            } else
                return "Du kannst nicht durch 0 teilen!";
        } else
            return "Mindestens eine Eingabe ist fehlerhaft oder leer!";
    } else
        return "Irgendetwas fehlt! &#129300;";
}

$resultDataFile = "result.data.txt";

$resultData = file_exists($resultDataFile) ? "Previous result: " . file_get_contents($resultDataFile) : "";
?>

<p class="text-center text-gray-700 text-xl">
    <?php
    if (isset($_REQUEST["submit"]))
        echo validateForm($resultDataFile);
    ?>
</p>

<p class="text-center text-gray-500 text-m mt-4">
    <?= $resultData; ?>
</p>