<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\components\SmallBody;

$this->title = 'My Yii Application Blog';
?>

<!-- Main Content -->
<div class="container ">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php foreach ($posts as $post):?>
                <?=Html::img(Url::to('@web/img/home-bg.jpg'), ['class' => 'w-100', 'alt' => 'image-post'])?>
                <div class="post-preview">
                    <a href="<?=Url::toRoute(['/posts/post', 'id' => $post->slug])?>">
                        <h2 class="post-title"><?=$post->title?></h2>
                        <h3 class="post-subtitle">
                            <?=SmallBody::widget(['body' => $post->body])?>
                        </h3>
                    </a>
                    <p class="post-meta">
                        Posted by <a href="#"><?=$post->posted_by?></a> on <?=$post->created_at?>
                    </p>
                </div>
                <hr>
            <?php endforeach; ?>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>

<hr>
