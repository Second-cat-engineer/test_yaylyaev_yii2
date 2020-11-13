<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<!-- Язык берется динамически -->
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <h1>Hello, Telecontact!</h1>
    <div class="wrap">

        <div class="container">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><?= Html::a('Главная', '/test_yaylyaev_yii2/web/') ?></li>
                <li role="presentation"><?= Html::a('Статьи', '/test_yaylyaev_yii2/web/article/index') ?></li>
                <li role="presentation" class="active"><?= Html::a('Статья', '/test_yaylyaev_yii2/web/article/show-one') ?></li>
            </ul>

            <?= $content; ?>
        </div>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
