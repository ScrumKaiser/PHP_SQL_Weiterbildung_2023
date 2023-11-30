<?php
function calculateAge($birthday)
{
    $difference = time() - $birthday;

    $age = $difference / 60 / 60 / 24 / 365.25;

    return (int)$age;
}

function constructOutput($timestamp, $text)
{
    $age = calculateAge($timestamp);

    $text = nl2br(htmlspecialchars(strip_tags($text)));

    return ("Birthday: $timestamp
    <br>
    Age: $age
    <br>
    <p>$text</p>");
}

function validateForm($values)
{
    $day = $values["day"] ?? "";
    $month = $values["month"] ?? "";
    $year = $values["year"] ?? "";
    $text = $values["text"] ?? "";

    if (!empty($day) && !empty($month) && !empty($year) && $text !== "") {
        if (checkdate($month, $day, $year)) {
            $timestamp = strtotime(("$month/$day/$year"));

            if ($timestamp <= time()) {
                return constructOutput($timestamp, $text);
            } else
                return "You haven't been born yet!";
        } else
            return "At least one number is invalid!";
    } else
        return "At least one field is empty!";
}

if ($_REQUEST && isset($_REQUEST["submit"]))
    echo validateForm($_REQUEST);
