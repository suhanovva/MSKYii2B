<?php
namespace app\console\controllers;
use yii\console\Controller;
use yii\console\ExitCode;

class HelloController extends Controller
{
    public function actionIndex($message = 'hello world')
    {
        echo $message . "\n";
        return ExitCode::OK;
    }
}
