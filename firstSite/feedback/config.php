<?php
session_start();

$error = $_SESSION["error"] ?? "";
unset($_SESSION["error"]);

$feedbacksFile = "feedbacks.save";

if (file_exists($feedbacksFile))
    $feedbacks = unserialize(file_get_contents($feedbacksFile));
else
    $feedbacks = [];

$feedbacksCount = count($feedbacks);

$ratings = [
    ["name" => "breathtaking", "emoji" => "😱", "count" => 0, "value" => 0],
    ["name" => "okayish", "emoji" => "😐", "count" => 0, "value" => 0],
    ["name" => "bad", "emoji" => "👿", "count" => 0, "value" => 0]
];
?>