<?php
namespace frontend\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\filters\AccessControl;
use frontend\models\Posts;

class PostArticleController extends Controller
{
  
  public function behaviors(){
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
  
  public function actionIndex(){
    $user_id = Yii::$app->user->identity->id;
    //$model = Posts::find()->where(['posted_by'=>$user_id])->all();
    
    $model = new ActiveDataProvider([
      'query' => Posts::find()->where(['posted_by'=>$user_id]),
      'pagination'=>[
        'pageSize'=>10,
      ]
    ]);
    
    return $this->render('index',['model'=>$model]);
  }
  
  public function actionCreate(){
    $model = new Posts();
    
    if($model->load(Yii::$app->request->post())){
      $model->posted_by = Yii::$app->user->identity->getId();
      if($model->save()){
        return $this->redirect(['view','id'=>$model->id]);
      }
    }
    
    return $this->render('create', ['model' => $model]);
  }
  
  public function actionView($id){
    $user_id = Yii::$app->user->identity->id;
    
    $model = Posts::findOne(['id' => $id, 'posted_by' => $user_id]);
    return $this->render('view', ['model' => $model]);
  }
  
  public function actionUpdate($id){
    $user_id = Yii::$app->user->identity->id;
    $model = Posts::findOne(['id' => $id, 'posted_by' => $user_id]);
    
    if($model->load(Yii::$app->request->post())){
      $model->posted_by = Yii::$app->user->identity->getId();
      if($model->save(false)){
        return $this->redirect(['view','id'=>$id]);
      }
    }
    
    return $this->render('update', ['model' => $model]);
  }
  
  public function actionDelete($id){
    $user_id = Yii::$app->user->identity->id;
    
    if(Posts::find()->where(['id'=>$id, 'posted_by' => $user_id])->exists()){
      $post = Posts::find()->where(['id'=>$id])->one();
      if($post->delete()){
        return $this->redirect(['index']);
      }
    }
  }
  
  public function actionFake(){
    $faker = \Faker\Factory::create();
    
    $posts = new Posts();
    
    for($i=1; $i <= 15; $i++){
      $posts->setIsNewRecord(true);
      $posts->id = null;
      $posts->posted_by = rand(1,3);
      $posts->title = $faker->words(random_int(5,10), true);
      $posts->body = $faker->paragraph(random_int(3,10));
      $posts->save();
    }
  }
}