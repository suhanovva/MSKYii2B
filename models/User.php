<?php

namespace app\models;
use yii\db\ActiveRecord;

class User extends ActiveRecord implements \yii\web\IdentityInterface
//class User extends \yii\base\Object implements \yii\web\IdentityInterface
{

    public static function tableName(){
        return 'users';
    }

    /**
     * Поиск по ИД
     */
    public static function findIdentity($id)
    {
		//debug($id);
		$res = static::findOne(['id' => $id]);
		
		return $res;
		
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
		//return static::findOne(['access_token' => $token]);
		
        return null;
    }

    /**
     * Поиск users по имени
     *
     * @param  string      $login
     * @return static|null
     */
    public static function findByUsername($username)
    {
		//debug($name);
		$res = static::findOne(['login' => $username]);
		//
        return $res;
		
		
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
		//debug($this->id);
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
		
		$res = $this->password_loc === $password;
		//debug($res);
       return $res;
       // return \Yii::$app->security->validatePassword($password, $this->password);
    }

    public function generateAuthKey(){
      $this->auth_key = \Yii::$app->security->generateRandomString();
    }
}