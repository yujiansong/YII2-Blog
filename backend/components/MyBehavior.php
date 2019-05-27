<?php
namespace backend\components;

use yii\base\ActionFilter;
use Yii;

class MyBehavior extends ActionFilter
{
    public function beforeAction($action)
    {
//        var_dump('111');
        return true;
    }

    public function isGuest()
    {
        return Yii::$app->user->isGuest;
    }
}