<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3" style="max-width: 600px;">
        <div class="row border border-light rounded shadow">
            <?php
            require_once "feedback_form.tpl.php";
            ?>
        </div>
        <div class="row mt-5">
            <?php
            require_once "feedback_overview.tpl.php";
            ?>
        </div>
        <div class="row mt-5">
            <?php
            require_once "feedback_list.tpl.php";
            ?>
        </div>
    </div>
</body>

</html>