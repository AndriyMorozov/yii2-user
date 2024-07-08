<?php

/**
 * @var yii\widgets\ActiveForm $form
 * @var polucorus\user\models\User $user
 */
?>

<?= $form->field($user, 'email')->textInput(['maxlength' => 255])->label('Ел. пошта') ?>
<?= $form->field($user, 'username')->textInput(['maxlength' => 255]) ?>
<?= $form->field($user, 'fio')->textInput(['maxlength' => 255]) ?>
<?= $form->field($user, 'password')->passwordInput() ?>
