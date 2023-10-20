<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="container">
  <?php $form = ActiveForm::begin() ?>
  
  <?php echo $form->field($model, 'old_password')->passwordInput() ?>
  <?php echo $form->field($model, 'new_password')->passwordInput() ?>
  
  <?php echo Html::submitButton('Change password', ['class' => 'btn btn-primary']) ?>
  
  <?php $form = ActiveForm::end() ?>
</div>
