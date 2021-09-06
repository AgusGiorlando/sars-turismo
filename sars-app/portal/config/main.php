<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-portal',
    'name' => 'Portal',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'portal\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-portal',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-portal', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the portal
            'name' => 'advanced-portal',
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
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
        'view' => [ 
            'theme' => [ 
                'basePath' => '@portal/themes/main', 
                'baseUrl' => '@web/themes/main', 
                'pathMap' => [ 
                    '@app/views' => '@app/themes/main', 
                ], 
            ], 
        ], 
    ],
    'params' => $params,
];
