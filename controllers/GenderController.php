<?php

namespace sheillendra\reference\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Json;

class GenderController extends Controller {
    
    public function actionIndex() {
		if(Yii::$app->request->isAjaxRequest){
			Yii::$app->end();
		}
    }
}
