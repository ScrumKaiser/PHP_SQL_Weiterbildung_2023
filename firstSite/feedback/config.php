<?php
session_start();

$error = $_SESSION["error"] ?? "";
unset($_SESSION["error"]);

$feedbackDataFile = "feedbacks.save";

if (file_exists($feedbackDataFile))
    $feedbackData = unserialize(file_get_contents($feedbackDataFile));
else
    $feedbackData = [];

$ratings = [
    ["name" => "breathtaking", "emoji" => "😱", "count" => 0, "value" => 0],
    ["name" => "okayish", "emoji" => "😐", "count" => 0, "value" => 0],
    ["name" => "bad", "emoji" => "👿", "count" => 0, "value" => 0]
];
?>