<?php
namespace frontend\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex($name)
    {
//        echo 'hello, '.$name;
        return $this->render('index', [
            'name' => $name,
        ]);
    }

    public function actionCreate()
    {

    }
}