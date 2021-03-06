<?php

namespace app\models;

//use yii\base\Model;

// Класс расширен от Model, т.к. не требуется работа с БД.
// если класс будет работать с БД то необходимо расширятся от класса ActiveRecord
use yii\db\ActiveRecord;

class TestForm extends ActiveRecord
{
    // в случае если класс расширяет класс Модель то без объявления свойств работать не будет
    // в случае если класс расширяет класс АктивРекорд то и без объявления работает
    //public $name;
    //public $password;
    //public $email;
    //public $text;
    //public $gender;

    public static function tableName()
    {
        return 'form';
    }

    public function attributeLabels()
    {
        // Исправляет то что написано в файле form.php
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'content' => 'Текс сообщения'
        ];
    }

    public function rules()
    {
        // Валидация поля Имя и email на стороне клиента
        // в файле config/web.php можно установить правило и здесь не прописывать правило для языка
        // [['name', 'email'], 'required', 'message' => 'Заполните обязательное поле']
        return [
            [['name', 'email'], 'required'],
            ['gender', 'safe'],  // фактически не проверяет на бузопасность, по умолчанию считает что безопасен
                                 // ничего не хочу с ним делать, но если хоть что то нужно с ним сделать хотся бы трим
            //[ 'name', 'required'],
            //[ 'email', 'required']
            // Правила валидации для email
            ['email', 'email'],
            // валидатор для длины поля
            ['name', 'string', 'min' => 3, 'message' => 'Имя должно содержать минимум 5 символов'],
            ['name', 'string', 'max' => 8, 'message' => 'Имя должно содержать не более 8 символов'],
            // На клиенте валидация пройдет, однако на сервере не пройдет
            // т.к не все валидаторы срабатывают на клиенте. наши только на сервере работают
            //['name', 'myRule'],

            // для поля text обрежется все начальные и концевые пробелы
            ['content', 'trim'],

            // В yii действует такое правило: если для свойств не указаны правила валидации, то это поле не будет
            // передано при массовом заполнении объекта. для того чтобы массово заполнялось необходимо прописать
            // правило. либо предавать в объект отдельно
            // либо указывать ['text', 'safe'],
        ];
    }

    /*
    public function myRule($attrs)
    {
        if (!in_array($this->$attrs, ['Safuan', 'world'])) {
            $this->addError($attrs, 'Wrong');
        }
    }
    */


}