<?php

namespace sheillendra\reference;

use Yii;

class Module extends \yii\base\Module {

    public $controllerNamespace = 'sheillendra\reference\controllers';

    public function init() {
        parent::init();
        Yii::$app->getI18n()->translations['reference*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@sheillendra/reference/messages',
        ];
        if (isset(Yii::$app->view->theme->active)) {
            Yii::$app->view->theme->pathMap[Yii::$app->view->theme->active]['@sheillendra/reference/views'] = 
                ['@sheillendra/reference/themes/' . Yii::$app->view->theme->active . '/views'];
        }
    }

}
