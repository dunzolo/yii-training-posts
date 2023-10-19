<?php

namespace frontend\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string $posted_by
 * @property string $title
 * @property string $body
 * @property string|null $image
 * @property int|null $status
 * @property string|null $slug
 * @property string|null $created_at
 */
class Posts extends \yii\db\ActiveRecord
{
  /**
   * {@inheritdoc}
   */
  public static function tableName()
  {
    return 'posts';
  }
  
  public function behaviors()
  {
    return[
      [
        'class' => SluggableBehavior::class,
        'attribute' => 'title',
        'ensureUnique' => true
      ]
    ];
  }
  
  /**
   * {@inheritdoc}
   */
  public function rules()
  {
    return [
      [['title', 'body', 'slug', 'image'], 'required'],
      [['body'], 'string'],
      [['status'], 'integer'],
      [['posted_by', 'created_at'], 'safe'],
      [['title'], 'string', 'max' => 100],
      [['slug'], 'string', 'max' => 255],
      [['image'], 'file', 'extensions' => 'jpg, png, gif', 'maxFiles' => 3]
    ];
  }
  
  /**
   * {@inheritdoc}
   */
  public function attributeLabels()
  {
    return [
      'id' => 'ID',
      'posted_by' => 'Posted By',
      'title' => 'Title',
      'body' => 'Body',
      'image' => 'Image',
      'status' => 'Status',
      'slug' => 'Slug',
      'created_at' => 'Created At',
    ];
  }
  
  public function getUser(){
    return $this->hasOne(User::class, ['id' => 'posted_by']);
  }
}
