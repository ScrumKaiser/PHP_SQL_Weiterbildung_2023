<?php
foreach ($feedbacks as $feedback) {
    $i = $feedback["rating"];

    if (isset($ratings[$i]))
        $ratings[$i]["count"]++;
}
?>

<div class="col-12">
    <p class="fs-5 col-12">
        Saved reviews: <?= $feedbacksCount; ?>
    </p>

    <?php
    foreach ($ratings as $rating) {
        $rating["value"] = $feedbacksCount > 0 ? round($rating["count"] * 100 / $feedbacksCount) : 0;
    ?>
        <div class="row mb-2" style="align-items:center">
            <div class="col-2">
                <span class="fs-1"><?= $rating["emoji"]; ?></span>
            </div>
            <div class="col-10">
                <div class="progress" role="progressbar" aria-valuenow="<?= $rating["value"]; ?>" aria-valuemin="0" aria-valuemax="100" style="height:100%">
                    <div class="progress-bar" style="width: <?= $rating["value"]; ?>%">
                        <?= $rating["value"]; ?>%
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>