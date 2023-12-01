<div class="col">
    <?php
    if ($feedbackCount > 0) {
    ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Rating</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $feedbackData = array_reverse($feedbackData);

                foreach ($feedbackData as $feedback) {
                ?>
                    <tr>
                        <td>
                            <?= $feedback["username"]; ?>
                        </td>
                        <td>
                            <?= $feedback["email"]; ?>
                        </td>
                        <td>
                            <?php
                            if (isset($ratings[$feedback["rating"]]))
                                echo "{$ratings[$feedback["rating"]]["name"]} {$ratings[$feedback["rating"]]["emoji"]}";
                            else
                                echo "N/A";
                            ?>
                        </td>
                        <td>
                            <?= $feedback["comment"]; ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    } else {
    ?>

        <div class="alert alert-warning col-12" role="alert">
            There is no feedback yet.
        </div>
    <?php
    }
    ?>
</div>