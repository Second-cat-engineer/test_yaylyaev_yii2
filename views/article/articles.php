<?php
//$this->title = 'Articles';
//var_dump($articles);

foreach ($articles as $article) {
    echo $article->id . '<br>';
    echo $article->title . '<br>';
    echo $article->content . '<br>' . '<hr>';
}
//debug(Yii::$app);
