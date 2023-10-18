<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'My Yii Articles';
?>

<div class="container">
    <h3>Update Post</h3>

    <?php $form = ActiveForm::begin()?>
    <?php echo $form->field($model, 'title')->textInput() ?>
    <?php echo $form->field($model, 'body')->textarea(['rows' => 5]) ?>
    <?php echo Html::submitButton('Post', ['class' => 'btn btn-primary']) ?>
    <?php ActiveForm::end()?>
</div>
