<?php
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
?>

<div class="container">

    <h3>Create Post</h3>

  <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']])?>
  <?php echo $form->field($model, 'title')->textInput() ?>
  <?php echo $form->field($model, 'body')->textarea(['rows' => 5]) ?>
  <?php echo $form->field($model, 'image[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
  <?php echo $form->field($model, 'status')->dropDownList([1 => 'Active', 0 => 'Inactive']) ?>
  <?php echo Html::submitButton('Post', ['class' => 'btn btn-primary']) ?>
  <?php ActiveForm::end()?>

</div>
