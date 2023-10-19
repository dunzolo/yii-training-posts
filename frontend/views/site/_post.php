<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\components\SmallBody;

if(empty($model->image)){
  $img = Url::to('@web/img/home-bg.jpg');
}else{
  $img = Url::to('@web/img/upload/'.$model->image);
}
?>

<?=Html::img($img, ['class' => 'w-100', 'alt' => 'image-post'])?>
<div class="post-preview">
  <a href="<?=Url::toRoute(['/posts/post', 'id' => $model->slug])?>">
    <h2 class="post-title"><?=$model->title?></h2>
    <h3 class="post-subtitle">
      <?=SmallBody::widget(['body' => $model->body])?>
    </h3>
  </a>
  <p class="post-meta">
    Posted by <a href="<?=Url::to(['/posts/user', 'id'=>$model->posted_by])?>"><?=$model->user->username?></a> on <?=$model->created_at?>
  </p>
</div>
<hr>
