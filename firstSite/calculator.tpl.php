<?php
function calculate($number1, $number2, $operator)
{
    return match ($operator) {
        "+" => $number1 + $number2,
        "-" => $number1 - $number2,
        "*" => $number1 * $number2,
        "/" => $number1 / $number2
    };
}

function validateForm()
{
    if (isset($_REQUEST["number1"]) && isset($_REQUEST["number2"]) && isset($_REQUEST["operator"])) {
        $number1 = htmlspecialchars($_REQUEST["number1"]);
        $number2 = htmlspecialchars($_REQUEST["number2"]);
        $operator = htmlspecialchars($_REQUEST["operator"]);

        if ($number1 !== "" && $number2 !== "") {

            if (is_numeric($number1) && is_numeric($number2) && in_array($operator, array("+", "-", "*", "/"))) {
                if ($number2 == 0 && $operator == "/")
                    return "Du kannst nicht durch 0 teilen!";
                else
                    return "$number1 $operator $number2 = " . calculate($number1, $number2, $operator);
            } else
                return "Das gehört hier nicht rein!";
        } else
            return "Mindestens eine Eingabe fehlt!";
    } else
        return "Irgendetwas fehlt! &#129300;";
}

if (isset($_REQUEST["submit"])) {
?>

    <p class="text-center text-gray-700 text-xl">
        Result:
    </p>

    <p class="text-center text-gray-700 text-xl mt-4">
        <?= validateForm(); ?>
    </p>

<?php
}
