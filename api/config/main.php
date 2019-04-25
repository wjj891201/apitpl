<?php

$params = array_merge(
        require __DIR__ . '/../../common/config/params.php', require __DIR__ . '/../../common/config/params-local.php', require __DIR__ . '/params.php', require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'api\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'v2' => [
            'class' => 'api\modules\v2\Module',
        ],
    ],
    'components' => [
//        'response' => [
//            'class' => 'yii\web\Response',
//            'on beforeSend' => function ($event) {
//                $response = $event->sender;
//                $response->data = [
//                    'success' => $response->isSuccessful,
//                    'code' => $response->getStatusCode(),
//                    'data' => $response->data,
//                    'message' => $response->statusText
//                ];
//                $response->statusCode = 200;
//            },
//        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\Adminuser',
            'enableAutoLogin' => true,
            'enableSession' => false,
        //'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
        ],
//        'session' => [
//            // this is the name of the session cookie used for login on the backend
//            'name' => 'advanced-backend',
//        ],
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
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                    [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'article',
                    'extraPatterns' => [
                        'POST search' => 'search'
                    ]
                ],
                    ['class' => 'yii\rest\UrlRule',
                    'controller' => 'top10',
                    'except' => ['delete', 'create', 'update', 'view'],
                    'pluralize' => false,
                ],
                    ['class' => 'yii\rest\UrlRule',
                    'controller' => 'adminuser',
                    'except' => ['delete', 'create', 'update', 'view'],
                    'pluralize' => false,
                    'extraPatterns' => [
                        'POST login' => 'login',
                        'POST signup' => 'signup',
                    ]
                ],
                    ['class' => 'yii\rest\UrlRule',
                    'controller' => 'v2/article',
                ],
            ],
        ],
    ],
    'params' => $params,
];
