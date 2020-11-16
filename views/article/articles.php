<?php
//$this->title = 'Articles';
//var_dump($articles);
use app\components\MyWidget;

//echo MyWidget::widget();
//echo MyWidget::widget(['name' => 'saf']);

MyWidget::begin();
    echo 'привет мир!';
MyWidget::end();

foreach ($articles as $article) {
    echo $article->id . '<br>';
    echo $article->title . '<br>';
    echo $article->content . '<br>' . '<hr>';
}

MyWidget::begin();
echo 'привет мир!';
MyWidget::end();
//debug(Yii::$app);
