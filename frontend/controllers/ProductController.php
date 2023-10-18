<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

class ProductController extends Controller
{
  public function behaviors()
  {
    return [
      'access' => [
        'class' => AccessControl::class,
        'except' => ['index'],
        'rules' => [
          [
            'allow' => true,
            'roles' => ['@']
          ]
        ]
      ]
    ];
  }

  public function actionIndex()
  {
    $menu = 'category';
    return $this->render('index', ['menu' => $menu]);
  }

  public function actionDetail($id, $name)
  {
    /*if (Yii::$app->user->isGuest) {
      return $this->redirect(['/site/login']);
    }*/

    return $this->render('detail', ['id' => $id, 'name' => $name]);
  }
}