<?php

namespace frontend\controllers;

use Yii;

class AsssignbookController extends \yii\web\Controller
{
    public function actionAssignbook()
    {
    	       $model = new AssignBook();
        return $this->render('assignbook');
    }
    
}