<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>

<?php
if(isset($_GET["reg"]))
{
    echo ('<div class="alert alert-success">
  <strong>Success!</strong> Profile created successfully!<br> Enter your username and password
</div>
');
}
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <label>User Name</label>
    <input class="form-control" name="username" type="text">

    <label>Password</label>
    <input class="form-control" name="password" type="password">

    <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <input value="Login" class=" btn btn-success" name="submit" type="submit">
            </div>
        </div>

    <?php ActiveForm::end(); ?>
</div>
