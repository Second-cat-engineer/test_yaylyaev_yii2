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

    public function actionLazytest()
    {
        //для ленивой загрузки
        // применять в том случае если у нас не много объектов. тут нужно учитывать сколько они потребляют память
        //$brand = Brand::findOne(3);
        $brands = Brand::find()->all();
        return $this->render('lazytest', compact('brands'));
    }

    public function actionGreedytest()
    {
        //для жадной загрузки
        //$brand = Brand::find()->with('products')->where('id=3')->all();
        $brands = Brand::find()->with('products')->all();
        return $this->render('greedytest', compact('brands'));
    }

    public function actionTest2()
    {
        $product = Product::findOne(1);
        return $this->render('test2', compact('product'));
    }
}