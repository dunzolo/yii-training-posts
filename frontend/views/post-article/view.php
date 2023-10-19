<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

$this->title = 'My Yii Articles';
?>

<div class="container">
  <!--<h3><?php /*=$model->title*/?></h3>
  <p><?php /*=$model->body*/?></p>-->
  
  <?php
  echo DetailView::widget([
    'model' => $model,
    'attributes' => [
      'title', 'body',
      [
        'attribute' => 'created_at',
        'format' => ['date', 'Y-m-d']
      ]
    ]
  ])
  ?>
</div>
