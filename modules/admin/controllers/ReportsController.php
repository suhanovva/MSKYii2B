<?php

namespace app\modules\admin\controllers;
//require_once("varDump.php");
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\widgets\ListView;
use yii\filters\AccessControl;
use yii\web\ForbiddenHttpException;
use yii\base;
/**
 * OrdersController implements the CRUD actions for Orders model.
 */
class ReportsController extends Controller
{
	
	
    /**
     * {@inheritdoc}
	 * Поведение
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
			'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'roles' => ['admin'],
                        'allow' => true
                    ]
                ],
				'denyCallback' => function ($rule, $action) {
					throw new ForbiddenHttpException('У вас нет доступа к этой странице');
				}
            ]
        ];
    }

    /*******
     * 
     ******/
    public function actionIndex()
    {
        
        return $this->render('index',['Отчеты']);
    }

}
