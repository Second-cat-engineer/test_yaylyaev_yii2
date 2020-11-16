<?php

namespace app\models;

use yii\db\ActiveRecord;

class Brand extends ActiveRecord
{
    public static function tableName()
    {
        return 'brands';
    }

    public function getProducts()
    {
        // Первый параметр имя класса с которым связываем, и соответственно ключем будет поле из этой же таблицы,
        // а значением является значение на которое мы ссылаемся, т.е. поле из текущей модели
        return $this->hasMany(Product::className(), ['brand_id' => 'id']);
    }
}