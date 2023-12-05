<?php
require_once "config.php";

$username = trim($_POST["username"] ?? "");
$email = trim($_POST["email"] ?? "");
$rating = $_POST["rating"] ?? "";
$comment = trim($_POST["comment"] ?? "");

if (!empty($username) && !empty($email) && isset($ratings[$rating]) && $comment != "") {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $username = htmlspecialchars($username);
        $comment = htmlspecialchars(strip_tags($comment));

        $newFeedback = [
            "username" => $username,
            "email" => $email,
            "rating" => $rating,
            "comment" => $comment
        ];

        // Datei Speichervariante
        // $feedbacks[] = $newFeedback;
        // file_put_contents($feedbacksFile, serialize($feedbacks));

        // Datenbank Speichervariante
        $statement = $db->prepare("INSERT INTO feedbacks (username, email, rating, comment)
        VALUES (:username, :email, :rating, :comment);");
        $statement->execute($newFeedback);

        $error = "success";
    } else
        $error = "Invalid email format!";
} else
    $error = "At least one field is empty!";

$_SESSION["error"] = $error;

header("Location: {$_SERVER["HTTP_REFERER"]}");
exit;
