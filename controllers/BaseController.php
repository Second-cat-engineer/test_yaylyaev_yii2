<?php

namespace app\controllers;

use yii\web\Controller;

class BaseController extends Controller
{
    public function debug($arr)
    {
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }
}