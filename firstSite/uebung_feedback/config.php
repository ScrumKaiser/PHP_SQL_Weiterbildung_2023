<?php
session_start();

$error = $_SESSION["error"] ?? "";
unset($_SESSION["error"]);

// Datei Speichervariante
// $feedbacksFile = "feedbacks.save";

// if (file_exists($feedbacksFile))
//     $feedbacks = unserialize(file_get_contents($feedbacksFile));
// else
//     $feedbacks = [];

// Datenbank Speichervariante
$db = new PDO(
    "mysql:host=localhost;dbname=feedback_system",
    "root",
    "",
    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);

$statement = $db->query("SELECT username, email, rating, comment
FROM feedbacks;");
$feedbacks = $statement->fetchAll();

$feedbacksCount = count($feedbacks);

$ratings = [
    ["name" => "breathtaking", "emoji" => "😱", "count" => 0, "value" => 0],
    ["name" => "okayish", "emoji" => "😐", "count" => 0, "value" => 0],
    ["name" => "bad", "emoji" => "👿", "count" => 0, "value" => 0]
];
