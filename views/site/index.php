<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts of all users';
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= GridView::widget([

        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],



            'title',
            'excerpt',
            'text:ntext',
            'keywords',
            'description',
            'time',
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],
        ],
    ]); ?>
</div>
