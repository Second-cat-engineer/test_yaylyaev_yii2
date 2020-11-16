<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    //установка языка на которое будет переводится вывод сообщения при валидации
    'language' => 'ru',
    //'layout' => 'base', это глобальный способ установления в качестве главной страницы другого базового шаблона
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'qTFKxNv81XB2eK5hvbIOG46VbjE8CYqL',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //правило дописывания в конец нашим ссылкам
            'suffix' => '.html',

            // Правило для контроллеров.
            // но если страниц сайта достаточно много то этим правилом неудобно пользоваться
            // поэтому можем пользоваться регулярными выражениями
            'rules' => [
                [
                    'pattern' => '',
                    'route' => '/web/',
                    'suffix' => ''
                ],
                '<action:(about|contact|login)>' => 'site/<action>',
                // можно прописать любой экшн, однако тут нельзя забывать про проверку, т.к. пользователь может ввести все что угодно
                // Частные правила должны распологаться выше, так как если какое то правило сработает, то дальше уже не идет
                //'<action:\w+>' => 'site/<action>',

                //'about' => 'site/about',
                //'contact' => 'site/contact',
                //'login' => 'site/login',
                'article' => 'article/'
            ],
        ],

    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['*'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
