<?php
namespace backend\controllers;
use yii\web\Controller; 

/**
 * Site controller
 */
class IndexController extends Controller
{
    public $layout = 'home';
    public function actionIndex()
    {
        return $this->render('index');
        // echo 1;
    }
}