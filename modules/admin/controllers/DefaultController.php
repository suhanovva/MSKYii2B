<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use Yii;
/**
 * Default controller for the `admin` module
 */
 Yii::$app->name='MSK YII2';
class DefaultController extends AppAdminController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
	
	/**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
