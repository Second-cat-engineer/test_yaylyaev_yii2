<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\models\TestForm;

class FormController extends BaseController
{
    //public $layout = 'base';

    public function actionForm()
    {
        $model = new TestForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                Yii::$app->session->setFlash('success', 'Данные приняты');
                //$this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }
        return $this->render('form', ['model' => $model]);
    }
}