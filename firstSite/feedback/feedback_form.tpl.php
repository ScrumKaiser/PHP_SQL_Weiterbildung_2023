<div class="col-12 bg-light text-center p-2">
    <span class="fs-4">Give a feedback</span>
</div>
<div class="col-12">
    <form action="feedback_form_validation.php" method="POST" class="row g-3 p-2">
        <?php
        if ($error == "success") {
        ?>
            <div class="alert alert-success col-12 mb-0" role="alert">
                Thank you for your feedback!
            </div>
        <?php
        } else if (!empty($error)) {
        ?>
            <div class="alert alert-danger col-12 mb-0" role="alert">
                <?= $error; ?>
            </div>
        <?php
        }
        ?>

        <div class="col-md-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="col-md-6">
            <label class="form-label">Rating</label><br>
            <?php
            foreach ($ratings as $i => $rating) {
            ?>
                <input type="radio" class="btn-check" id="rating<?= $i; ?>" name="rating" value="<?= $i; ?>" <?= $i == 0 ? "checked" : ""; ?>>
                <label class="btn btn-light btn-lg" for="rating<?= $i; ?>"><?= $rating["emoji"]; ?></label>
            <?php
            }
            ?>
        </div>
        <div class="col-md-6">
            <label for="comment" class="form-label">Comment</label>
            <textarea class="form-control" id="comment" name="comment" rows="1"></textarea>
        </div>
        <div class="col-md12 text-center">
            <button type="submit" class="btn btn-primary">Save Feedback</button>
        </div>
    </form>
</div>