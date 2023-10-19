<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\components\SmallBody;
use yii\widgets\LinkPager;
?>

<div class="container ">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <?php foreach ($models as $model):?>
        <?=Html::img(Url::to('@web/img/home-bg.jpg'), ['class' => 'w-100', 'alt' => 'image-post'])?>
        <div class="post-preview">
          <a href="<?=Url::toRoute(['/posts/post', 'id' => $model->slug])?>">
            <h2 class="post-title"><?=$model->title?></h2>
            <h3 class="post-subtitle">
              <?=SmallBody::widget(['body' => $model->body])?>
            </h3>
          </a>
          <p class="post-meta">
            Posted by <a href="#"><?=$model->posted_by?></a> on <?=$model->created_at?>
          </p>
        </div>
      <?php endforeach; ?>
      <div class="pagination">
        <?=LinkPager::widget([
          'pagination' => $pages,
          'linkContainerOptions' => ['class' => 'page-link'],
          'pageCssClass' => ['class' => 'page-item'],
        ])?>
      </div>
    </div>
  </div>
</div>


