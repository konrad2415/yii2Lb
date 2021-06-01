<?php


namespace app\controllers;

use Yii;

use yii\filters\AccessController;

use yii\web\Controller;

 class TestController extends Controller
 { 
      public function actionTest()
      {
           return $this->render('a');
      }

 }

?>