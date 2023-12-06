<?php
session_start();

$name = trim($_POST["name"] ?? "");
$process = $_POST["process"] ?? null;

if ($process == "login") {
    if (!empty($name))
        $_SESSION["name"] = htmlspecialchars($_POST["name"]);
} else if ($process == "logout") {
    session_destroy();

    header("Location: https://www.helloworld.org/");
    exit;
}

header("Location: {$_SERVER["HTTP_REFERER"]}");
exit;
