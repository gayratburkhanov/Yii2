

<h1>Posts of selected user</h1>
    <tr>
        <th scope="col"><?= $alls['user_id'] ?></th>
        <th scope="col"><?= $alls['text'] ?></th>

    </tr>




    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Except</th>
            <th scope="col">Text</th>
            <th scope="col">Keywords</th>
            <th scope="col">Description</th>
            <th scope="col">Time</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($alls as $all){ ?>
            <tr>
                <th scope="col"><?= $all['title'] ?></th>
                <th scope="col"><?= $all['excerpt'] ?></th>
                <th scope="col"><?= $all['text'] ?></th>
                <th scope="col"><?= $all['keywords'] ?></th>
                <th scope="col"><?= $all['description'] ?></th>
                <th scope="col"><?= $all['time'] ?></th>
            </tr>
            <?php
        }
        ?>

        </tbody>
    </table>