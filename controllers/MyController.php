<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 13.03.2016
 * Time: 12:49
 */

namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller{

    public function actionIndex($id = null){
        $hi = 'Hello, World!';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];

        if(!$id) $id = 'test';

//        return $this->render('index', ['hello' => $hi, 'names' => $names]);
        return $this->render('index', compact('hi', 'names', 'id'));
    }

} 