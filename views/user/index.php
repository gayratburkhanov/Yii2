<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */




?>


<h1>List of all users</h1>



<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">User name</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user){ ?>
        <tr>
            <th scope="col"><?= $user['firstname'] ?></></th>
            <th scope="col"><?= $user['lastname'] ?></th>
            <th scope="col"><?= $user['username'] ?></th>
            <th>
                <a href="view?id=<?= $user['id'] ?>" value="<?= $user['id'] ?>">View Posts</a>
            </th>
        </tr>
        <?php
    }
    ?>

    </tbody>
</table>