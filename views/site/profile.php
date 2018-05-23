<?php

use yii\widgets\ActiveForm;
$this->title = 'My Profile';

?>


<?php $form = ActiveForm::begin(); ?>

<?php
if(isset($_GET["event"]))
{
    echo ('<div class="alert alert-success">
  <strong>Success!</strong> Profile information is updated!
</div>
');
}
if(isset($_GET["pass"]))
{
    echo ('<div class="alert alert-success">
  <strong>Success!</strong> Password is updated!
</div>
');
}
if(isset($_GET["error"]))
{
    echo ('<div class="alert alert-danger">
  <strong>Uuups!</strong> Invalid input!
</div>
');
}
?>
<div class="modal-body row">
    <div class="col-md-6">
        <h3>Personal information</h3>
        <label>First Name</label>
        <input class="form-control" name="firstname" value="<?= $alls['firstname'] ?>" type="text">

        <label>Last Name</label>
        <input class="form-control" name="lastname" value="<?= $alls['lastname']; ?>" type="text">

        <label>User Name</label>
        <input class="form-control" name="username" value="<?= $alls['username'] ?>" type="text">

        <br>

        <input value="Update" class=" btn btn-success" name="profEdit" type="submit">
    </div>
    <div class="col-md-6">
        <h3>Password change</h3>

        <label>Current password</label>
        <input class="form-control" name="CurrentPassword" type="password">

        <label>New password</label>
        <input class="form-control" name="NewPassword" type="password">

        <label>Retype new password</label>
        <input class="form-control" name="reNewPassword" type="password">

        <br>
        <input value="Update" class=" btn btn-success" name="passEdit" type="submit">
    </div>
</div>

<?php $form = ActiveForm::end() ?>
