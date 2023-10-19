<?php

namespace backend\modules\super\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property int $id
 * @property string|null $name
 * @property string $username
 * @property string|null $phone
 * @property string $email
 * @property int $status
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property int $created_at
 * @property int $updated_at
 * @property string|null $verification_token
 */
class Admin extends \yii\db\ActiveRecord
{
  /**
   * {@inheritdoc}
   */
  public static function tableName()
  {
    return 'admin';
  }
  
  /**
   * {@inheritdoc}
   */
  public function rules()
  {
    return [
      [['username', 'email', 'auth_key', 'password_hash', 'created_at', 'updated_at'], 'required'],
      [['status', 'created_at', 'updated_at'], 'integer'],
      [['name'], 'string', 'max' => 100],
      [['username', 'email', 'password_hash', 'password_reset_token', 'verification_token'], 'string', 'max' => 255],
      [['phone'], 'string', 'max' => 20],
      [['auth_key'], 'string', 'max' => 32],
      [['username'], 'unique'],
      [['email'], 'unique'],
      [['password_reset_token'], 'unique'],
    ];
  }
  
  /**
   * {@inheritdoc}
   */
  public function attributeLabels()
  {
    return [
      'id' => 'ID',
      'name' => 'Name',
      'username' => 'Username',
      'phone' => 'Phone',
      'email' => 'Email',
      'status' => 'Status',
      'auth_key' => 'Auth Key',
      'password_hash' => 'Password Hash',
      'password_reset_token' => 'Password Reset Token',
      'created_at' => 'Created At',
      'updated_at' => 'Updated At',
      'verification_token' => 'Verification Token',
    ];
  }
}
