<?php
namespace app\controllers;

use app\models\Article;
use yii\web\Controller;
use Yii;

class ArticleController extends BaseController
{
    public $layout = 'base';

    public function actionArticles()
    {
        $this->view->title = 'Articles';
        $articles = Article::find()->all(); //var_dump($articles);

        return $this->render('articles', compact('articles'));

    }

    /*
    public function actionArticles()
    {
        $this->view->title = 'Articles';
        if (Yii::$app->request->isAjax) {
            debug($_POST);
            //debug(Yii::$app->request->post());
            $yess = 'Yess';
        }
        return $this->render('articles', ['yess' => $yess]);


        //$content = 'this is content';
        //return $this->render('article', ['content' => $content]);
    }

    public function actionArticleOne()
    {
        $this->view->title = 'article One';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Ключевики']);
        //$this->layout = 'base';
        return $this->render('articleOne');
    }
    */


    /*
    public function actionArticle($id = null)
    {
        $test = 'hello world';
        $array = ['test1', 'test2', 'test3'];
        return $this->render('article', compact('test', 'array', 'id'));

        return $this->render(
            'article',
            [
                'hello' => $test,
                'tests' => $array,
            ]
        );

        //return 'this is articles';
    }

    public function actionArticleAll()
    {
        //$this->debug(Yii::$app);
        return 'article all';
    }
    */

}