<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->title;
?>
<div class="post-view">

    <h1>Post: <?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'title',
            'excerpt',
            'text:ntext',
            'keywords',
            'description',
            'time',
        ],
    ]) ?>

</div>
