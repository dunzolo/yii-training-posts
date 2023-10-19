<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Posts $model */
/** @var ActiveForm $form */
?>
<div class="posts-create">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'posted_by') ?>
        <?= $form->field($model, 'title') ?>
        <?= $form->field($model, 'body') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'created_at') ?>
        <?= $form->field($model, 'image') ?>
        <?= $form->field($model, 'slug') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- posts-create -->
