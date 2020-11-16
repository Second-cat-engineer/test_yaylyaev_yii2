<?php
namespace app\controllers;

use app\models\Article;
use yii\web\Controller;
use Yii;

class ArticleController extends BaseController
{
    public $layout = 'base';

    public function actionIndex()
    {
        $this->view->title = 'Articles';

        //Выбор всех записей из таблицы Article
        $articles = Article::find()->all(); //var_dump($articles);

        // Сортировка записей в обратном порядке
        //$articles = Article::find()->orderBy(['id' => SORT_DESC])->all();

        // Данные в виде массива. в БД выполняется только один запрос.
        //$articles = Article::find()->asArray()->all();

        // Фильтровать данные по условию
        //$articles = Article::find()->where(['title' => 'this is tests', 'id' => 3])->all();
        //$articles = Article::find()->where('id=4')->all();
        //$articles = Article::find()->where(['like', 'title', 't'])->all();
        //$articles = Article::find()->where(['>', 'id', 3])->all();
        //$articles = Article::find()->where(['title' => 'this is tests'])->limit(2)->all();
        //$articles = Article::find()->asArray()->where(['title' => 'this is tests'])->limit(1)->one();
        //$articles = Article::find()->asArray()->where(['title' => 'this is tests'])->count();
        //$articles = Article::find()->asArray()->count();
        //$articles = Article::findOne(['id' => 1] );
        //$articles = Article::findAll(['title' => 'this is tests']);

        //$sql = 'SELECT * FROM articles WHERE title LIKE \'%th%\'';
        //$articles = Article::findBySql($sql)->all();

        // Чтобы не было SQL иньекции необходимо пользоваться подготовленными запросами
        //$sql = 'SELECT * FROM articles WHERE title LIKE :search';
        //$articles = Article::findBySql($sql, [':search' => '%th%'])->all();

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