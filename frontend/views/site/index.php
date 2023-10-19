<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\components\SmallBody;
use yii\widgets\ListView;

$this->title = 'My Yii Application Blog';
?>

<!-- Main Content -->
<div class="container ">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <?php
      echo ListView::widget([
        'dataProvider' => $posts,
        'itemView' => '_post',
        'pager' => [
          'linkContainerOptions' => ['class' => 'page-link'],
          'pageCssClass' => ['class' => 'page-item'],
        ],
      ])
      ?>
      <!-- Pager -->
      <!--<div class="clearfix">
        <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
      </div>-->
    </div>
  </div>
</div>

<hr>
