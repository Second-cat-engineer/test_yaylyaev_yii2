<?php
//$this->title = 'Articles';
//var_dump($articles);

foreach ($products as $product) {
    echo $product->id . '<br>';
    echo $product->brand_id . '<br>';
    echo $product->title . '<br>';
    echo $product->price . '<br>' . '<hr>';
}
//debug(Yii::$app);