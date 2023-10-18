<?php
namespace frontend\components;

use frontend\tests\UnitTester;
use yii\base\Widget;
use yii\helpers\Html;

class SmallBody extends Widget{
  public $body;
  public $count = 15;

  public function init(){
    parent::init();
    $mini = explode(" ", $this->body);

    if(count($mini) <= $this->count){
      return $this->body;
    } else{
      array_splice($mini, $this->count);
      return $this->body = implode(" ", $mini).'...';
    }
  }

  public function run(){
    return Html::decode($this->body, $this->count);
  }

}
