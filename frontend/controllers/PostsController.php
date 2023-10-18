<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Posts;

class PostsController extends Controller
{
  public function actionPost($id){
    $post = Posts::findOne(['id' => $id]);
    return $this->render('post', ['post' => $post]);
  }
}