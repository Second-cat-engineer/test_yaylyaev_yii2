<?php

namespace app\controllers;


use app\models\Brand;
use app\models\Product;
use yii\web\Controller;
use Yii;

class ProductController extends BaseController
{
    public $layout = 'base';

    public function actionProducts()
    {
        $this->view->title = 'Products';
        $products = Product::find()->all();
        return $this->render('product', compact('products'));
    }

    public function actionTest()
    {
        $brand = Brand::findOne(3);
        return $this->render('test', compact('brand'));
    }

    public function actionTest2()
    {
        $product = Product::findOne(1);
        return $this->render('test2', compact('product'));
    }
}