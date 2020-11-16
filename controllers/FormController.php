<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\models\TestForm;

class FormController extends BaseController
{
    //public $layout = 'base';

    //метод для сохранения данных в БД
    public function actionSave()
    {
//        $model = new TestForm();
//        $model->name = 'Автор';
//        $model->email = 'test@mail.ru';
//        $model->content = 'this is content';
//        $model->gender = 'male';
//        //var_dump($model);
//        $model->save(); // может использоваться как для апдейта, так и для инсерта
                            // как insert срабатывает если мы объект создаем с помощью оператора new
                            // как update в том случае если запрос на получение данных
    }


    public function actionForm()
    {
        $model = new TestForm();

        if ($model->load(Yii::$app->request->post())) {
            // при вызове метода сайф автоматически будет проводится валидация данных
            // будут сохранены только безопасные атрибуты, которые описаны в правилах в моделе
            if ($model->save()) {
            //if ($model->validate()) {
                Yii::$app->session->setFlash('success', 'Данные приняты');
                //$this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }
        return $this->render('form', ['model' => $model]);
    }

    // метод позволяющий вносить изменения в модель
    public function actionUpdate()
    {
        $model = TestForm::findOne(9);
        $model->email = 'test@test.ru';
        //$model->save();
        $model->update();
        // для обновления нескольких записей используется метод updateAll()


    }

    /**
     *
     */
    public function actionDelete()
    {
//        $model = TestForm::findOne(1);
//        $model->delete();

        //для удаления нескольких записей
        // если без параметров, то будут удалены все записи
        TestForm::deleteAll(['>', 'id', 9]);
    }
}