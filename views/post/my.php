<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */






?>



<h1>My posts</h1>


<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Except</th>
        <th scope="col">Text</th>
        <th scope="col">Keywords</th>
        <th scope="col">Description</th>
        <th scope="col">Time</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($cats as $cat){ ?>
    <tr>
        <th scope="col"><?= $cat->title ?></th>
        <th scope="col"><?= $cat->excerpt ?></th>
        <th scope="col"><?= $cat->text ?></th>
        <th scope="col"><?= $cat->keywords ?></th>
        <th scope="col"><?= $cat->description ?></th>
        <th scope="col"><?= $cat->time ?></th>
        <th>
            <a href="view?id=<?= $cat->id ?>" value="<?= $cat->id ?>">View</a>
        </th>
    </tr>
    <?php
    }
    ?>

    </tbody>
</table>