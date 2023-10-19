<?php

namespace backend\controllers;

class PostsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
