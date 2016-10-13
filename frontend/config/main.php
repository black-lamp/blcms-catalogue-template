<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'homeUrl' => '/',
    'bootstrap' => [
        'log',
        'bl\cms\shop\frontend\components\events\PartnersEvents'
    ],

    'language' => 'ru',
    'sourceLanguage' => 'en',

    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'articles' => [
            'class' => 'bl\articles\frontend\Module'
        ],
        'shop' => [
            'class' => 'bl\cms\shop\frontend\Module'
        ],
    ],
    'components' => [
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@frontend/messages',
                    'sourceLanguage' => 'uk',
                    'fileMap' => [
                        'shop' => 'shop.php'
                    ],
                ],
            ],
        ],
        'request' => [
            'baseUrl' => '/',
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'session' => [
            'name' => 'FRONTENDSESSID',
            'cookieParams' => [
                'httpOnly' => true,
                'path'     => '/',
            ],
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'class' => 'bl\multilang\MultiLangUrlManager',
            'baseUrl' => '/',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'cache' => null,
            'rules' => [
                [
                    'class' => 'bl\articles\UrlRule',
                    //'prefix' => 'articles/'
                ],
                [
                    'class' => bl\cms\shop\UrlRule::className(),
                    'prefix' => 'shop'
                ]
            ],
        ],
        'view' => [
        ],
    ],
    'params' => $params,
];