<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="<?=Url::base(true)?>">LearningYii</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?=Url::base(true)?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=Url::to(['/site/about'])?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=Url::to(['/posts'])?>">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=Url::to(['/site/contact'])?>">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=Url::to(['/product'])?>">Product</a>
        </li>
        <?php if(Yii::$app->user->isGuest):?>
          <li class="nav-item">
            <a class="nav-link" href="<?=Url::to(['/site/login'])?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=Url::to(['/site/signup'])?>">Signup</a>
          </li>
        <?php else: ?>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <span class="caret"></span><?=Yii::$app->user->identity->username?>
            </a>
            <ul class="dropdown-menu text-center">
              <li><a href="<?=Url::to(['/post-article'])?>">Post Articles</a></li>
              <li><a href="<?=Url::to(['/post-article/pjax'])?>">Pjax</a></li>
              <li class="divider"></li>
              <li class="nav-item">
                <?php
                echo Html::beginForm(['/site/logout']);
                echo Html::submitButton('Logout ('.Yii::$app->user->identity->username.')', ['class' => 'btn-link']);
                echo Html::endForm();
                ?>
              </li>
            </ul>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<header class="masthead" style="background-image: url('/img/home-bg.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1><?=$this->title?></h1>
          <span class="subheading">Yii Application</span>
        </div>
      </div>
    </div>
  </div>
</header>