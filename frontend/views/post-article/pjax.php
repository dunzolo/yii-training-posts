<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
?>

<div class="container">
  <?php Pjax::begin(); ?>
  
  <?php echo Html::beginForm(['pjax'], 'post', ['data-pjax' => '']) ?>
  <?php echo Html::label('Message', 'message') ?>
  <?php echo Html::input('text', 'message', Yii::$app->request->post('string'), ['class' => 'form-control mb-3']) ?>
  <?php echo Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'send-message']) ?>
  <?php echo Html::endForm() ?>
  
  <?php if(!empty($response)): ?>
    <div class="alert alert-success"><?=$response?></div>
  <?php endif;?>
  
  <?php Pjax::end(); ?>
</div>
