<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Registration';

?>




<?php $form = ActiveForm::begin(['action' => 'register', 'method' => 'post',]); ?>
<h1>Registration</h1>
<label>First Name</label>
<input class="form-control" name="firstname" type="text">

<label>Last Name</label>
<input class="form-control" name="lastname" type="text">

<label>User Name</label>
<input class="form-control" name="username" type="text">

<label>Password</label>
<input class="form-control" name="password" type="password">

<label>Retype Password</label>
<input class="form-control" name="re_password" type="password">

<br>

<input value="Register" class=" btn btn-success" name="submit" type="submit">

<?php // echo $model; ?>

<?php $form = ActiveForm::end() ?>

