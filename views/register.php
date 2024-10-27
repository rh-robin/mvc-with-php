
<?php
/**
 * @var  $this \app\core\View;
 * @var  $model \app\models\User;
 */


$this->title = 'Register';
?>

<h1>Register</h1>
<?php $form = \app\core\form\Form::begin('','post') ?>
<?php echo $form->field($model, 'firstName'); ?>
<?php echo $form->field($model, 'lastName'); ?>
<?php echo $form->field($model, 'email'); ?>
<?php echo $form->field($model, 'password')->passwordField(); ?>
<?php echo $form->field($model, 'confirmPassword')->passwordField(); ?>
<button type="submit" class="btn btn-primary">Submit</button>


<?php \app\core\form\Form::end(); ?>


<!--<form action="" method="post">
    <div class="mb-3">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" name="firstName" value="<?php /*echo $model->firstName ?? '' */?>" class="form-control <?php /*echo $model->hasError('firstName') ? 'is-invalid' : '' */?>" id="first_name">
        <div class="invalid-feedback">
            <?php /*echo $model->getFirstError('firstName') ?? '' */?>
        </div>
    </div>
    <div class="mb-3">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" name="lastName" class="form-control" id="last_name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
    </div>
    <div class="mb-3">
        <label for="c_password" class="form-label">Confirm Password</label>
        <input type="password" name="confirmPassword" class="form-control" id="c_password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>-->
